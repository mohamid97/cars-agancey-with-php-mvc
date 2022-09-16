<?php

namespace cars\controllers\admin;

use cars\models\admin\carModel;
use cars\models\admin\categoryModel;

class Cars extends Controller
{
    public function addCar(){
        $cat = new categoryModel();
        $this->data = $cat->getAll();
        echo  $this->renderView('addCar');
    }
    public function getCars(){
        var_dump(app()->session->getFlash('success'));
    }
    public function checkCar(){
        if(app()->request->isPost()):
            $rules = [
                'category_id'=>'required|numeric',
                'carName' =>'required|text',
                'price'        =>'required|text|numeric',
                'description' =>'required|text',
                'year'        =>'required|numeric',
                'model'      =>'required|text',
                'location'   =>'required|text',
                'mileage'    =>'required|numeric',
                'color'     => 'required|text',
                'engine'    =>'required|text',
                'status'   =>'required|text',
                'transmision' =>'required|text',
                'fuel'     =>'required|text',
                'engineSize' =>'required|text',
                'stockNumber' =>'required|text',
                'vin'        =>'required|text',
                'madeIn'    =>'required|text',
            ];

           /* if ():
            endif;*/
            app()->validate->setRules($rules);
            app()->validate->make(app()->request->post());
            app()->validate->avatar();
            app()->validate->validateImages();
            if(app()->validate->getErrors()):
            app()->session->setFlash('errors', app()->validate->getErrors());
            app()->session->setFlash('old', app()->request->post());
            return back();
            else:
                $car = new carModel();
                $car->category_id = app()->request->post()['category_id'];
                $car->carName = app()->request->post()['carName'];
                $car->avatar = app()->validate->imgName['avatar'];
                $car->gallary =json_encode(app()->validate->imgName['gallary']);
                $car->price = app()->request->post()['price'];
                $car->description = app()->request->post()['description'];
                $car->year = app()->request->post()['year'];
                $car->model =app()->request->post()['model'];
                $car->location=app()->request->post()['location'];
                $car->mileage=app()->request->post()['mileage'];
                $car->color =app()->request->post()['color'];
                $car->engine = app()->request->post()['engine'];
                $car->status=app()->request->post()['status'];
                $car->transmision = app()->request->post()['transmision'];
                $car->fuel=app()->request->post()['fuel'];
                $car->engineSize=app()->request->post()['engineSize'];
                $car->stockNumber=app()->request->post()['stockNumber'];
                $car->vin = app()->request->post()['vin'];
                $car->madeIn =app()->request->post()['madeIn'];
                if($car->create()){
                    app()->session->setFlash('success' , 'Your car has added sussfully');
                    redirect('/admin_panel/getCars');
                }

            endif;
        endif;

    }

}