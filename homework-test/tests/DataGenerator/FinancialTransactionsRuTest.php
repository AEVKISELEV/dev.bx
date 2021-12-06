<?php

namespace App\DataGenerator;

use PHPUnit\Framework\TestCase;

class FinancialTransactionsRuTest extends TestCase
{

	public function getValidateFailSamples(): array
	{
		return [
			'empty' => [
				[],
			],
			'Valid Mandatory field with FALSE' => [
				[
					'Name' => False,
					'PersonalAcc' => '1',
					'BankName' => '1',
					'BIC' => '1',
					'CorrespAcc' => '1',
				]
			],
			'Valid Mandatory field with one empty line' => [
				[
					'Name' => '',
					'PersonalAcc' => '1',
					'BankName' => '1',
					'BIC' => '1',
					'CorrespAcc' => '1',
				]
			],
			'Valid Type' => [
				[
					'Name' => [1],
					'PersonalAcc' => 3,7,
					'BankName' => 5,
					'BIC' => '1',
					'CorrespAcc' => '1',
				]
			],
			'Valid Maximum Length(9 symbol in BIC)' => [
				[
					'Name' => '1',
					'PersonalAcc' => '1',
					'BankName' => '1',
					'BIC' => '01234567890',
					'CorrespAcc' => '1',
				]
			],
		];
	}

	/**
	 * @dataProvider getValidateFailSamples
	 *
	 * @param array $fields
	 */

	public function testValidateFail(array $fields): void
	{
		$dataGenerator = new \App\DataGenerator\FinancialTransactionsRu();

		$dataGenerator->setFields($fields);

		$result = $dataGenerator->validate();

		static::assertFalse($result->isSuccess());
	}




	public function testThatValidateSuccess(): void
	{
		$dataGenerator = new \App\DataGenerator\FinancialTransactionsRu();

		$dataGenerator->setFields([]);

		$dataGenerator
			->setName('Name')
			->setField('BIC', false)
			->setBIC('BIC')
			->setBankName('BankName')
			->addFields(['Name'=> 'Name'])
			->setCorrespondentAccount('CorrespondentAccount')
			->setPersonalAccount('CorrespondentAccount')
		;

		$result = $dataGenerator->validate();

		static::assertTrue($result->isSuccess());
	}
	public function getValidateRightSamples(): array
	{
		return [
			'Valid Mandatory field with FALSE' => [
				[
					'Name' => False,
					'PersonalAcc' => '1',
					'BankName' => '1',
					'BIC' => '1',
					'CorrespAcc' => '1',
				]
			],
			'Valid Mandatory field with one empty line' => [
				[
					'Name' => '',
					'PersonalAcc' => '1',
					'BankName' => '1',
					'BIC' => '1',
					'CorrespAcc' => '1',
				]
			],
			'Valid Type array' => [
				[
					'Name' => [1],
					'PersonalAcc' => 3,
					'BankName' => 5,
					'BIC' => '1',
					'CorrespAcc' => '1',
				]
			],
			'Valid Type object and don`t validate length Name' => [
				[
					'Name' => $this->$fields,
					'PersonalAcc' => '1',
					'BankName' => '1',
					'BIC' => '01234567890',
					'CorrespAcc' => '1',
				]
			],
		];
	}

	/**
	 * @dataProvider getValidateRightSamples
	 *
	 * @param array $fields
	 */
	public function testGetDataRight($fields): void
	{
		$dataGenerator = new \App\DataGenerator\FinancialTransactionsRu();

		$dataGenerator->setFields($fields);
		echo

		$data = $dataGenerator->getData();

		$string = 'ST00012|Name=|PersonalAcc='.$fields["PersonalAcc"].'|BankName='.$fields["BankName"].'|BIC='.$fields["BIC"].'|CorrespAcc='.$fields["CorrespAcc"];

		static::assertEquals($string, $data);
	}
}

