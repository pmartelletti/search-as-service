<?php


namespace App\Http\Controllers;


use Elastica\Query;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;

class TypeController extends Controller
{
    public function fullTextSearch(Request $request, $app, $type)
    {

    }

    public function autocompleteSearch(Request $request, $app, $type)
    {
        $searchText = $request->get('q');
        $search = (new \Elastica\Search(new \Elastica\Client(['host' => '162.243.187.198'])))
            ->addIndex($app)
            ->addType($type)
        ;

        $qb = new \Elastica\QueryBuilder();

        // $qb->query()->match()->setField('razon_social', $searchText)->setFieldType('razon_social', 'phrase')
        $query = (new Query())
            ->setQuery(
                $qb->query()->multi_match()
                    ->setFields(['_all'])
                    ->setType('phrase_prefix')
                    ->setQuery($searchText)
            )
//            ->setHighlight(['fields' => [
//                'razon_social' => new \stdClass(),
//                'alias' => new \stdClass(),
//                'domicilio' => new \stdClass()
//            ]])
        ;

        $search->setQuery($query);

        $results = [];
        foreach($search->search()->getResults() as $result) {
            $data = $result->getData();
            foreach(['razon_social', 'alias', 'localidad'] as $field) {
//                $data[$field] = str_replace($searchText, sprintf('<em>%s</em>', $searchText), $data[$field]);
                $data[$field] = preg_replace("/($searchText)/i","<em>$1</em>", $data[$field]);
            }
//            foreach($result->getHighlights() as $key => $highlighted) {
//                $data[$key] = $highlighted[0];
//            }
            $results[] = $data;
        }

        return $results;
    }
}