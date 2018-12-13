<?php

namespace App\Http\Controllers;

use PagSeguro;
use Illuminate\Http\Request;

class PagamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pagamento');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pagseguro = PagSeguro::setReference('ID do pedido')
            ->setSenderInfo([
              'senderName' => 'Nome Completo', //Deve conter nome e sobrenome
              'senderPhone' => '(32) 1324-1421', //Código de área enviado junto com o telefone
              'senderEmail' => 'email@email.com',
              'senderHash' => $request->tokenPagSeguro,
              'senderCPF' => '123.456.789-00' //Ou CNPJ se for Pessoa Júridica
            ])
            ->setCreditCardHolder([
              'creditCardHolderBirthDate' => '10/02/2000',
            ])
            ->setShippingAddress([
              'shippingAddressStreet' => 'Rua/Avenida',
              'shippingAddressNumber' => 'Número',
              'shippingAddressDistrict' => 'Bairro',
              'shippingAddressPostalCode' => '12345-678',
              'shippingAddressCity' => 'Cidade',
              'shippingAddressState' => 'UF'
            ])
            ->setItems([
              [
                'itemId' => 'ID',
                'itemDescription' => 'Nome do Item',
                'itemAmount' => 12.14, //Valor unitário
                'itemQuantity' => '2', // Quantidade de itens
              ],
              [
                'itemId' => 'ID 2',
                'itemDescription' => 'Nome do Item 2',
                'itemAmount' => 12.14,
                'itemQuantity' => '2',
              ]
            ])
            ->send([
              'paymentMethod' => 'creditCard',
              'creditCardToken' => $request->tokenPagSeguro,
              'installmentQuantity' => '2',
              'installmentValue' => 50.20,
            ]);
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
