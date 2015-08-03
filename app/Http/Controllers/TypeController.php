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
            );

        $search->setQuery($query);

        $results = [];
        foreach($search->search()->getResults() as $result) {
            $results[] = $result->getData();
        }

        return $results;
    }
}