<?php

namespace App\Models\DataMappers;

class AccountMapper extends Mapper {
    private $account;

    protected function __construct(Account $account) {
        $this->account = $account;
    }

    public function getAccount() {
        //call api https://api.themoviedb.org/3/account?api_key=<<api_key>>
    }
}