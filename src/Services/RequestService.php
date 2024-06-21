<?php

namespace App\Services;

use App\Kernel\Database\DatabaseInterface;
use App\Models\ListRequest;
use App\Models\Request;
use App\Models\Status;



class RequestService
{
    public function __construct(
        private DatabaseInterface $db
    )
    {
    }

    public function listRequests()
    {
        $listRequests = $this->db->get('ListRequests');

        return array_map(function($listRequests){
            
            return new ListRequest(
                $listRequests['id'],
                $listRequests['model_id'],
                $listRequests['request_id'],
                $listRequests['count'],
                $listRequests['cost'],
                $listRequests['status_id'],
            );
        }, $listRequests);
    }

    public function Requests()
    {
        $Requests = $this->db->get('requests');

        return array_map(function($Requests){
            
            return new Request(
                $Requests['id'],
                $Requests['user_name'],
                $Requests['UserID'],
                $Requests['user_contact'],
                $Requests['date_order'],
            );
        }, $Requests);
    }

    public function Status()
    {
        $status = $this->db->get('status');

        return array_map(function($status){
            
            return new Status(
                $status['id'],
                $status['name'],
            );
        }, $status);
    }

    public function userRequest($id)
    {
        $Requests = $this->db->get('requests',[
            'UserID' => $id
        ]);

        return array_map(function($Requests){
            
            return new Request(
                $Requests['id'],
                $Requests['user_name'],
                $Requests['UserID'],
                $Requests['user_contact'],
                $Requests['date_order'],
            );
        }, $Requests);
    }

    public function requestListRequest($id)
    {
        $listRequests = $this->db->get('listRequests',[
            'request_id' => $id
        ]);

        return array_map(function($listRequests){
            
            return new ListRequest(
                $listRequests['id'],
                $listRequests['model_id'],
                $listRequests['request_id'],
                $listRequests['count'],
                $listRequests['cost'],
                $listRequests['status_id'],
            );
        }, $listRequests);
    }

    public function listRequestRequest($id)
    {
        $Requests = $this->db->first('requests',[
            'id' => $id
        ]);
            
            return new Request(
                $Requests['id'],
                $Requests['user_name'],
                $Requests['UserID'],
                $Requests['user_contact'],
                $Requests['date_order'],
            );
    }

    public function findStatus($id)
    {
        $status = $this->db->first('status',[
            'id' => $id
        ]);
            return new Status(
                $status['id'],
                $status['name'],
            );
    }
}