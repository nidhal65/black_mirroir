<?php
/**
 * Created by PhpStorm.
 * User: Nidhal65
 * Date: 18/11/2018
 * Time: 22:26
 */

namespace EpisodesBundle\Services;

use Unirest\Request;


class CallAPI
{
    const URL = 'http://adneomapisubject.herokuapp.com/blackmirror';

    const HEADERS = ['Accept' => 'application/x-www-form-urlencoded', 'X-Auth-Token' => 'TokenADNTest2018'];

    /**
     * @return mixed
     */
    public function getAPI(){
        $response = Request::get(self::URL, self::HEADERS);
        return $response->body;
    }

}