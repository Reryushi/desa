@section('dashboard_center_top')
    <div class="db-cent-1" style="
                                                padding: 110px 50px 10px 50px;
                                                background: url({{ asset("front/images/background/bg_about.jpg") }}) no-repeat center center;
                                                background-size: cover;
                                                position: relative;">
        <p>Hi {{ Auth::user()->first_name." ".Auth::user()->last_name }},</p>
        <h4>Welcome to your dashboard</h4> </div>
    @show