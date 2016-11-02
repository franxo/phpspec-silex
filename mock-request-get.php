# Mocking GET Request: One param

    private $requestMock;

    function let
    (
        Symfony\Component\HttpFoundation\Request        $requestMock,
        Symfony\Component\HttpFoundation\ParameterBag   $bagMock
    )
    {
        $this->requestMock = $requestMock;

        $bagMock->get('first_param')->willReturn(1);
        $this->requestMock->query = $bagMock;

        $this->beConstructedWith($this->requestMock);

    }

    function it_should_get_one_get_param()
    {

        $params = $this->requestMock->query->get('first_param');
    }

}


# Mocking GET Request: All params

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
        $this->requestMock->query = $bagMock;

        $this->beConstructedWith($this->requestMock);

    }

    function it_should_get_some_get_params()
    {

        $params = $this->requestMock->query->all();
    }

}
