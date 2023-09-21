<?php
    // Camel Case = myFunction(){

    // };
    // //Camel case ditandai dengan nama diawalnya dengan hufur kecil
    // //penulisan function
    // // Lower case
    // my_function(){

    // };
    // //lower case ditandai dengan underscore (_) di awal nama function
    // //pascal case, ditandai dengan nama awal huruf besar
    // MyFunction(){};

    function simpleFunction(/* parameter */ String $nama){
        echo "Hello $nama <br>";
    }
    simpleFunction('Eka');
    simpleFunction('Rudi');
    simpleFunction('Sudi');


    function penjumlahan($a=3, $b=4 /* disini merupakan angka default */){
        echo $a + $b."<br>";
    }
    penjumlahan(3,6);
    penjumlahan(100,10);
    penjumlahan(20,300000000);
    penjumlahan();
    //lanjutan, jika disini ada angka didalam kurung, maka yang disini akan dikerjakan terlebih dahulu, dan jila ada kurung yang kosong atau tidak isi values maka default tidak akan benerja, jika ada kurung yang kosong valuesnya maka defalut akan bekerja

?>