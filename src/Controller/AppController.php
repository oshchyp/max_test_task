<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class AppController extends AbstractController
{
    const PRODUCT_1 = [
        "id" => 1,
        "serialNumber" => 1234,
        "isNew" => 1,
        "photo" => "https://cdn.synthetic.com.ua/media/assets/images/e/e/9/0/e/a/0/2/a/d/5/0/4/3/d/5/600x600/ee90ea02ad5043d5a7adfffc0fbc8fd2.png",
        "title" => "Product 1",
        "type" => "Monitors 1",
        "specification" => "Specification 2",
        "guarantee" => [
            "start" => "2017-06-29 12:09:33",
            "end" => "2017-06-29 12:09:33",
        ],
        "price" => [
            ["value" => 100, "symbol" => "USD", "isDefault" => 0],
            ["value" => 2600, "symbol" => "UAH", "isDefault" => 1],
        ],
        "order" => 1,
        "date" => "2017-06-29 12:09:33",
    ];

    const PRODUCT_2 = [
        "id" => 2,
        "serialNumber" => 5678,
        "isNew" => 1,
        "photo" => "https://cdn.synthetic.com.ua/media/assets/images/0/8/d/a/4/4/c/9/e/5/b/5/4/8/9/3/1600x1600/08da44c9e5b5489396b0d71b7ef7d6c3.png",
        "title" => "Product 2",
        "type" => "Monitors 2",
        "specification" => "Specification 1",
        "guarantee" => [
            "start" => "2017-06-29 12:09:33",
            "end" => "2017-06-29 12:09:33",
        ],
        "price" => [
            ["value" => 100, "symbol" => "USD", "isDefault" => 0],
            ["value" => 2600, "symbol" => "UAH", "isDefault" => 1],
        ],
        "order" => 1,
        "date" => "2017-06-29 12:09:33",
    ];


    const PRODUCT_3 = [
        "id" => 3,
        "serialNumber" => 5678,
        "isNew" => 1,
        "photo" => "https://cdn.synthetic.com.ua/media/assets/images/6/2/0/a/5/f/5/0/c/6/8/c/4/7/f/f/full/620a5f50c68c47ff941e8ad3df4b01ce.png",
        "title" => "Product 3",
        "type" => "Monitors 1",
        "specification" => "Specification 1",
        "guarantee" => [
            "start" => "2017-06-29 12:09:33",
            "end" => "2017-06-29 12:09:33",
        ],
        "price" => [
            ["value" => 100, "symbol" => "USD", "isDefault" => 0],
            ["value" => 2600, "symbol" => "UAH", "isDefault" => 1],
        ],
        "order" => 2,
        "date" => "2017-06-29 12:09:33",
    ];


    const PRODUCT_4 = [
        "id" => 4,
        "serialNumber" => 4845,
        "isNew" => 1,
        "photo" => "https://cdn.synthetic.com.ua/media/assets/images/6/2/0/a/5/f/5/0/c/6/8/c/4/7/f/f/full/620a5f50c68c47ff941e8ad3df4b01ce.png",
        "title" => "Product 4",
        "type" => "Monitors 3",
        "specification" => "Specification 3",
        "guarantee" => [
            "start" => "2017-06-29 12:09:33",
            "end" => "2017-06-29 12:09:33",
        ],
        "price" => [
            ["value" => 100, "symbol" => "USD", "isDefault" => 0],
            ["value" => 2600, "symbol" => "UAH", "isDefault" => 1],
        ],
        "order" => 3,
        "date" => "2017-06-29 12:09:33",
    ];


    const PRODUCT_5 = [
        "id" => 5,
        "serialNumber" => 9567,
        "isNew" => 1,
        "photo" => "https://cdn.synthetic.com.ua/media/assets/images/6/2/0/a/5/f/5/0/c/6/8/c/4/7/f/f/full/620a5f50c68c47ff941e8ad3df4b01ce.png",
        "title" => "Product 5",
        "type" => "Monitors 1",
        "specification" => "Specification 2",
        "guarantee" => [
            "start" => "2017-06-29 12:09:33",
            "end" => "2017-06-29 12:09:33",
        ],
        "price" => [
            ["value" => 100, "symbol" => "USD", "isDefault" => 0],
            ["value" => 2600, "symbol" => "UAH", "isDefault" => 1],
        ],
        "order" => 1,
        "date" => "2017-06-29 12:09:33",
    ];

    const ORDERS = [
        [
            "id" => 1,
            "title" => "Order 1",
            "date" => "2017-06-29 12:09:33",
            "description" => "desc",
            "products" => [
                self::PRODUCT_1,
                self::PRODUCT_2,
                self::PRODUCT_5,
            ],
        ],
        [
            "id" => 2,
            "title" => "Order 2",
            "date" => "2017-06-29 12:09:33",
            "description" => "desc",
            "products" => [
                self::PRODUCT_3
            ],
        ],
        [
            "id" => 3,
            "title" => "Order 3",
            "date" => "2017-06-29 12:09:33",
            "description" => "desc",
            "products" => [
                self::PRODUCT_4
            ],
        ],
    ];


    #[Route('/products')]
    public function products(): JsonResponse
    {
        return $this->json(
            [
                self::PRODUCT_1,
                self::PRODUCT_2,
                self::PRODUCT_3,
                self::PRODUCT_4,
                self::PRODUCT_5,
            ]
        );
    }

    #[Route('/orders')]
    public function arrivals(): JsonResponse
    {
        return $this->json(
            self::ORDERS
        );
    }

    #[Route('/oauth/id-gov-ua/redirect')]
    public function id(): JsonResponse
    {
        return $this->json(
            [
                'msg'=> 'OK'
            ]
        );
    }
}