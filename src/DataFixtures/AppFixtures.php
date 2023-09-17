<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    private function getData(): string
    {
        return '[
{
    "id": 1,
    "title": "Order 1",
    "date": "2017-06-29 12:09:33",
    "description": "desc",
    "products": [  
    
      {
      "id": 1,
    "serialNumber": 1234,
    "isNew": 1,
    "photo": "pathToFile.jpg",
    "title": "Product 1",
    "type": "Monitors",
    "specification": "Specification 1"
    "guarantee": {
      "start": "2017-06-29 12:09:33",
      "end": "2017-06-29 12:09:33"
    },
    "price": [
      {"value": 100, "symbol": "USD", "isDefault": 0},
      {"value": 2600, "symbol": "UAH", "isDefault": 1}
    ],
    "order": 1,
    "date": "2017-06-29 12:09:33"
  }
    
    ]
},
{
    "id": 2,
    "title": "Order 2",
    "date": "2017-06-29 12:09:33",
    "description": "desc",
    "products": []
},
{
    "id": 3,
    "title": "Order 3",
    "date": "2017-06-29 12:09:33",
    "description": "desc",
    "products": [],
}
]';
    }

    public function load(ObjectManager $manager): void
    {

//        const orders = [
//  {
//      id: 1,
//    title: 'Order 1',
//    date: '2017-06-29 12:09:33',
//    description: 'desc',
//    get products () { return products }
//  },
//  {
//      id: 2,
//    title: 'Order 2',
//    date: '2017-06-29 12:09:33',
//    description: 'desc',
//    get products () { return products }
//  },
//  {
//      id: 3,
//    title: 'Order 3',
//    date: '2017-06-29 12:09:33',
//    description: 'desc',
//    get products () { return products },
//  }
//]
//
//const products = [
//  {
//      id: 1,
//    serialNumber: 1234,
//    isNew: 1,
//    photo: 'pathToFile.jpg',
//    title: 'Product 1',
//    type: 'Monitors',
//    specification: 'Specification 1'
//    guarantee: {
//      start: '2017-06-29 12:09:33',
//      end: '2017-06-29 12:09:33'
//    },
//    price: [
//      {value: 100, symbol: 'USD', isDefault: 0},
//      {value: 2600, symbol: 'UAH', isDefault: 1}
//    ],
//    order: 1,
//    date: '2017-06-29 12:09:33'
//  },
//  {
//      id: 2,
//    serialNumber: 1234,
//    isNew: 1,
//    photo: 'pathToFile.jpg',
//    title: 'Product 1',
//    type: 'Monitors',
//    specification: 'Specification 1'
//    guarantee: {
//      start: '2017-06-29 12:09:33',
//      end: '2017-06-29 12:09:33'
//    },
//    price: [
//      {value: 100, symbol: 'USD', isDefault: 0},
//      {value: 2600, symbol: 'UAH', isDefault: 1}
//    ],
//    order: 2,
//    date: '2017-06-29 12:09:33'
//  }
//]


        $productArrivals = new

        // laptop
        ///https://cdn.synthetic.com.ua/media/assets/images/e/e/9/0/e/a/0/2/a/d/5/0/4/3/d/5/600x600/ee90ea02ad5043d5a7adfffc0fbc8fd2.png
        /// https://synthetic.ua/ru/product/noutbuk-15-6-samsung-galaxy-book-2-intel-core-i7-1255u-ram-8gb-ssd-256gb-windows-11/P09829LC/CS00095395?gclid=Cj0KCQjwx5qoBhDyARIsAPbMagDuYrLWZePvYMBm94ExshyAmWCM8IT7nFXTFS_LyelhN8gwMBHUPvoaAoNwEALw_wcB

        /// https://cdn.synthetic.com.ua/media/assets/images/0/8/d/a/4/4/c/9/e/5/b/5/4/8/9/3/1600x1600/08da44c9e5b5489396b0d71b7ef7d6c3.png
        ///https://synthetic.ua/ru/product/noutbuk-apple-macbook-pro-15-2017-i7-2-8-ghz-16gb-256gb-space-gray/P08496SJ/CSGZOXRUF


        // smartphone
        /// https://cdn.synthetic.com.ua/media/assets/images/a/3/1/f/9/9/6/1/f/f/5/6/4/b/4/7/1600x1600/a31f9961ff564b4782b67d20f3b9da33.jp
        /// https://synthetic.ua/ru/product/smartfon-apple-iphone-12-128-gb-blue-mgje3fs-a-mgje3rm-a/P05910YS/CSPGFB2VN

        ///https://synthetic.ua/ru/product/smartfon-samsung-galaxy-s9-sm-g960u-64-gb-1-sim-blue-12-8mp-5-8-snapdragon-835-3000-mah/P05922JY/CSVXDADB2
        /// https://cdn.synthetic.com.ua/media/assets/images/6/2/0/a/5/f/5/0/c/6/8/c/4/7/f/f/full/620a5f50c68c47ff941e8ad3df4b01ce.png

        $manager->flush();
    }
}
