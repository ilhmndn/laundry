<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Currency
    |--------------------------------------------------------------------------
    |
    | This value is the default currency that is going to be used in invoices.
    | You can change it on each invoice individually.
    */

    'currency' => 'EUR',

    /*
    |--------------------------------------------------------------------------
    | Default Decimal Precision
    |--------------------------------------------------------------------------
    |
    | This value is the default decimal precision that is going to be used
    | to perform all the calculations.
    */

   'decimals' => 2,

    /*
    |--------------------------------------------------------------------------
    | Default Tax
    |--------------------------------------------------------------------------
    |
    | This value is the default tax that is going to be used in invoices.
    | You can change it on each invoice individually.
    */

    'tax' => 0,

    /*
    |--------------------------------------------------------------------------
    | Default Tax Type
    |--------------------------------------------------------------------------
    |
    | This value is the default tax type that is going to be used in invoices.
    | You can change it on each invoice individually.
    | The tax type accepted values are: 'percentage' and 'fixed'
    | The percentage type calculates the tax depending on the invoice price, and
    | the fixed type simply adds a fixed ammount to the total price
    */

   'tax_type' => 'percentage',

   /*
   |--------------------------------------------------------------------------
   | Default Invoice Logo
   |--------------------------------------------------------------------------
   |
   | This value is the default invoice logo that is going to be used in invoices.
   | You can change it on each invoice individually.
   */

  'logo' => 'https://image.ibb.co/gEvMu8/logo_text.png',

  /*
  |--------------------------------------------------------------------------
  | Default Invoice Logo Height
  |--------------------------------------------------------------------------
  |
  | This value is the default invoice logo height that is going to be used in invoices.
  | You can change it on each invoice individually.
  */

 'logo_height' => 100,

  /*
  |--------------------------------------------------------------------------
  | Default Invoice Buissness Details
  |--------------------------------------------------------------------------
  |
  | This value is going to be the default attribute displayed in
  | the customer model.
  */

  'business_details' => [
      'name'        => 'Omah Laundry',
      'phone'       => '085888657657',
      'location'    => 'Jl Lebak No 73A',
      'zip'         => '43281',
      'city'        => 'Depok',
  ],

  /*
  |--------------------------------------------------------------------------
  | Default Invoice Footnote
  |--------------------------------------------------------------------------
  |
  | This value is going to be at the end of the document, sometimes telling you
  | some copyright message or simple legal terms.
  */

  'footnote' => '',

];
