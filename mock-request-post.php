# Mocking POST Request: One param

    private $requestMock;

    function let
    (
        Symfony\Component\HttpFoundation\Request        $requestMock,
        Symfony\Component\HttpFoundation\ParameterBag   $bagMock
    )
    {
        $this->requestMock = $requestMock;

        $bagMock->get('first_param')->willReturn(1);
        $this->requestMock->request = $bagMock;

        $this->beConstructedWith($this->requestMock);

    }

    function it_should_get_one_post_param()
    {

        $params = $this->requestMock->request->get('first_param');
    }

}


# Mocking POST Request: All params

    private $requestMock;

    function let
    (
        Symfony\Component\HttpFoundation\Request       $requestMock,
        Symfony\Component\HttpFoundation\ParameterBag  $bagMock
    )
    {
        $this->requestMock = $request;

        $request_param = [
            'first_param' => 666666666,
            'second_param' => 'Some text',
        ];

        $bagMock->all()->willReturn($request_param);
        $this->requestMock->request = $bagMock;

        $this->beConstructedWith($this->requestMock);

    }

    function it_should_get_some_post_params()
    {

        $params = $this->requestMock->request->all();
    }

}
