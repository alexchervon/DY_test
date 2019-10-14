<?php

namespace App\Swagger;


abstract class UserScheme
{
    /**
     * @SWG\Post(
     *      path="/user/auth",
     *      summary="Creates or authorizes the user",
     *      tags={"User"},
     *      description="Creates or authorizes the user. In the platform field, specify one of the options",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          required=true,
     *          @SWG\Schema(
     *            type="object",
     *              @SWG\Property(property="phone",type="string"),
     *              @SWG\Property(property="code",type="string"),
     *              @SWG\Property(property="X-platform",type="string",enum="[eyJ0eXAiOi,pd0ZGb1hWM,LmRldjMuZG]"),
     *          )
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                    type="object",
     *              @SWG\Property(
     *                  property="token",
     *                  type="string"
     *              )
     *              ),
     *          )
     *      ),
     *      @SWG\Response(
     *          response=422,
     *          description="Received error processed",
     *          @SWG\Schema(
     *              ref="#/definitions/Error",
     *          )
     *      )
     * )
     */
    abstract public function store();

    /**
     * @SWG\Put(
     *      path="/user",
     *      summary="Update the specified User in storage",
     *      tags={"User"},
     *      description="Update User",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="X-City-id",
     *          description="city id",
     *          type="string",
     *          required=true,
     *          in="header"
     *     ),
     *      @SWG\Parameter(
     *          name="user",
     *          in="body",
     *          description="User that should be updated",
     *          required=false,
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="name",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="email",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="birth_date",
     *                  type="date"
     *              )
     *           ),
     *      ),
     *      @SWG\Parameter(
     *          name="addresses",
     *          in="body",
     *          description="User addresses",
     *          required=false,
     *          @SWG\Schema(
     *              type="object",
     *                 @SWG\Property(property="street",type="string"),
     *                 @SWG\Property(property="house",type="string"),
     *                 @SWG\Property(property="building",type="string"),
     *                 @SWG\Property(property="apartment",type="string"),
     *                 @SWG\Property(property="marker",type="string"),
     *           ),
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *              type="object",
     *              @SWG\Schema(
     *              type="object",
     *           ),
     *
     *              ),
     *          )
     *      ),
     *      @SWG\Response(
     *          response=422,
     *          description="Received error processed",
     *          @SWG\Schema(
     *              ref="#/definitions/Error",
     *          )
     *      )
     * )
     */
    abstract public function update();

    /**
     * @SWG\Get(
     *      path="/users",
     *      summary="Display the specified User",
     *      tags={"User"},
     *      description="Get User",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          examples={
     *              "application/json": {
     *
     *                  "success":"true",
     *                  "data"= {
     *                          "user": {
     *                                     "name":"name",
     *                                     "email":"email",
     *                                     "birth_date":"date"
     *                                  },
     *                          "addresses": {
     *                                          {
     *                                              "id":"id",
     *                                              "city_id":"city_id",
     *                                              "street":"street",
     *                                              "house":"house",
     *                                              "building":"building",
     *                                              "apartment":"apartment",
     *                                              "hidden":"hidden",
     *                                              "marker":"marker",
     *                                          }
     *                                  }
     *                      }
     *               }
     *           }
     *      ),
     *      @SWG\Response(
     *          response=422,
     *          description="Received error processed",
     *          @SWG\Schema(
     *              ref="#/definitions/Error",
     *          )
     *      )
     * )
     */
    abstract public function show();

    /**
     * @SWG\Get(
     *      path="/user/uuid",
     *      summary="guest uuid",
     *      tags={"User"},
     *      description="Get uuid",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          examples={
     *              "application/json": {
     *
     *                  "success":"true",
     *                  "data": "uuid"
     *               }
     *           }
     *      ),
     * )
     */
    abstract public function getUuid();

    /**
     * @SWG\Put(
     *      path="/user/edit/phone",
     *      summary="edit phone",
     *      tags={"User"},
     *      description="edit phone",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="phone",
     *          in="body",
     *          description="user phone",
     *          required=true,
     *          @SWG\Schema(
     *            type="object",
     *              @SWG\Property(property="phone", type="string"),
     *          )
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          examples={
     *              "application/json": {
     *
     *                  "success":"true",
     *                  "data": {}
     *               }
     *           }
     *      ),
     * )
     */
    abstract public function updatePhone();

    /**
     * @SWG\Get(
     *      path="/user/edit/phone",
     *      summary="edit phone",
     *      tags={"User"},
     *      description="edit phone",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="X-Platform",
     *          description="Platform code",
     *          type="string",
     *          required=false,
     *          in="header"
     *     ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          examples={
     *              "application/json": {
     *
     *                  "success":"true",
     *                  "data": "integer"
     *               }
     *           }
     *      ),
     * )
     */
    abstract public function getSubscribePrice();

    /**
     * @SWG\Post(
     *      path="/user/premium/activate",
     *      summary="Activate subscribe",
     *      tags={"User"},
     *      description="Subscribe user",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="X-Platform",
     *          description="platform type",
     *          type="string",
     *          required=false,
     *          in="header"
     *     ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                    type="object"
     *              ),
     *          )
     *      ),
     *      @SWG\Response(
     *          response=422,
     *          description="Received error processed",
     *          @SWG\Schema(
     *              ref="#/definitions/Error",
     *          )
     *      )
     * )
     */
    abstract public function premiumActivate();
}
