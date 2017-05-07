<?php

class Data_model extends CI_Model
{
	public function customersList()
	{
		$customers_list = array(
			array(
				'id'            => '1',
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'id'            => '1',
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'id'            => '1',
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'id'            => '1',
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'id'            => '1',
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'id'            => '1',
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'id'            => '1',
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'id'            => '1',
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'id'            => '1',
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'id'            => '1',
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'id'            => '1',
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			)

		);

		return $customers_list;


	}

	public function customerDetail()
	{
		$customer_detail = array(
			'contact'             => [
				'name' => 'Robert Kenny', 'image' => 'admin/u29.png', 'email' => 'abc@gmail.com', 'phone' => '+85555555', 'country' => 'Australia',
				'city' => 'Sydney', 'address' => 'Sydney NSW 2020, Australia', 'postal_code' => '2000'
			],
			'billing_information' => [
				'country'     => 'Australia',
				'city'        => 'Sydney',
				'address'     => 'Sydney NSW 2020,  Australia',
				'postal_code' => '2000'
			],
			'payment_method'      => [
				['payment_method_name' => 'Robert Kenny', 'payment_method_expired_date' => '12/2019', 'payment_method_cardnumber' => 'XXXX XXXX XXXX 5678', 'active' => '1'],
				['payment_method_name' => 'Robert Kenny', 'payment_method_expired_date' => '05/2020', 'payment_method_cardnumber' => 'XXXX XXXX XXXX 1234', 'active' => '0']
			],
			'pass_card_data'      => ['pass_card_serial_no' => '32412443231241', 'expried_date' => '30/04/2017'],
			'family_members_list' => [
				['id' => 1, 'name' => 'Mary', 'email' => 'mary@gmail.com', 'date_of_birth' => '20/02/1994', 'country' => 'Australia', 'city' => 'Sydney', 'address' => 'Sydney NSW 2020, Australia', 'phone' => '+55555555'],
				['id' => 2, 'name' => 'Tom', 'email' => 'tom@gmail.com', 'date_of_birth' => '20/02/1994', 'country' => 'Australia', 'city' => 'Sydney', 'address' => 'Sydney NSW 2020, Australia', 'phone' => '+55555555'],
				['id' => 3, 'name' => 'Peter', 'email' => 'peter@gmail.com', 'date_of_birth' => '20/02/1994', 'country' => 'Australia', 'city' => 'Sydney', 'address' => 'Sydney NSW 2020, Australia', 'phone' => '+55555555'],
				['id' => 4, 'name' => 'Albert', 'email' => 'albert@gmail.com', 'date_of_birth' => '20/02/1994', 'country' => 'Australia', 'city' => 'Sydney', 'address' => 'Sydney NSW 2020, Australia', 'phone' => '+55555555']
			],
			'access_history'      => [
				['place' => 'Ski center A', 'status' => 'success', 'date' => '30/04/2017'],
				['place' => 'Ski center A', 'status' => 'success', 'date' => '30/04/2017'],
				['place' => 'Ski center A', 'status' => 'success', 'date' => '30/04/2017'],
				['place' => 'Ski center A', 'status' => 'success', 'date' => '30/04/2017'],
				['place' => 'Ski center A', 'status' => 'success', 'date' => '30/04/2017'],
				['place' => 'Ski center A', 'status' => 'success', 'date' => '30/04/2017'],
				['place' => 'Ski center A', 'status' => 'success', 'date' => '30/04/2017'],
				['place' => 'Ski center A', 'status' => 'success', 'date' => '30/04/2017'],
				['place' => 'Ski center A', 'status' => 'success', 'date' => '30/04/2017'],
				['place' => 'Ski center A', 'status' => 'success', 'date' => '30/04/2017'],
				['place' => 'Ski center A', 'status' => 'success', 'date' => '30/04/2017']
			]

		);

		return $customer_detail;

	}

	public function createdpasscardList()
	{
		$created_passcard_list = array(
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			)

		);

		return $created_passcard_list;
	}

	public function lostdpasscardList()
	{
		$lostdpasscardList = array(
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			), array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),

			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			)


		);

		return $lostdpasscardList;
	}
}

?>