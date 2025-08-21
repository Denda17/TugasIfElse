<?php

class Laptop 
{
    private int $price;
    public string $merk;
    public int $storage;
    public string $display;
    public int $ram;

    public function __construct( int $price, string $merk, int $storage, string $display, int $ram)
    {
        $this->price = $price;
        $this->merk = $merk;
        $this->storage = $storage;
        $this->display = $display;
        $this->ram = $ram;
    }

    // public function Detail(): string
    // {
    //     return 
    //     "Merk: $this->merk \nPrice: $this->price \nStorage: {$this->storage}GB \nDisplay: $this->display \nRAM: {$this->ram}GB";
    // }

    public function layar()
    {
        echo "Sudah Touchscreen";
    }

    public function status()
    {
        echo "Bagus Tapi Punya Kantor";
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function __get($name)
    {
        // if ($name == "price") {
        //     return "******";
        // }

        if (property_exists($this, $name))
        {
            return $this->$name;
        }

        return null;
    }
}

$laptop = new Laptop(10000000, "Asus", 512, "15.6 inch", 16);

echo "Harga : Rp." . $laptop->price . "\n"; 
echo "Merk :" . $laptop->merk . "\n";  
echo "Penyimpanan :" . $laptop->storage . "\n"; 
echo "Display :" . $laptop->display . "\n"; 
echo "RAM :" . $laptop->ram . "\n"; 

// echo $laptop->getPrice();
// echo "\n";
// echo $laptop->Detail();
// echo "\n";
echo $laptop->layar();
echo "\n";
echo $laptop->status();