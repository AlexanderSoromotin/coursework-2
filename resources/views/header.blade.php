<nav style="background-color: #fff !important;" class="header navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- Logo and Gym Name -->
        <a class="navbar-brand" href="{{ url("/employees") }}">
            <img src="{{ url("/img/logo.png") }}" class="d-inline-block align-top" alt="Your Gym Logo">
            Качалкин
        </a>

        <!-- Navigation Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url("/employees") }}">Сотрудники</a>
            </li>
        </ul>

        <!-- User Info and Logout Button -->
        <div class="navbar-text">
            <span class="mr-2">Имя пользователя</span>
            <img src="{{ url("/img/avatars/unknown_user.png") }}" alt="Profile Image" width="30" height="30" class="rounded-circle">
            <img class="svg" src="{{ url("/img/icons/logout.svg") }}" alt="">
        </div>
    </div>
</nav>

<style>
    .header {
        height: 80px;
    }
    .header .navbar-brand {
        display: flex;
        align-items: center;
        height: 100%;
        padding: 0;
    }
    .header .navbar-brand img {
        height: 30px;
        margin-right: 15px;
    }

    .header .navbar-nav {
        display: flex;
        align-items: center;
        margin-left: 15px;
    }

    .header .navbar-text {
        display: flex;
        align-items: center;
    }

    .header .navbar-text span {
        margin-right: 10px !important;
    }
    .header .navbar-text .svg {
        margin-left: 10px !important;
    }
    .header .navbar-text .svg:hover {
        cursor: pointer;
        opacity: .8;
    }
</style>

<script>
    var token = localStorage.getItem("user_token");
    if (token == null) {
        localStorage.removeItem("user_token");
        location.href = "{{ url("/") }}";
    }

    $.ajax({
        url: "{{ url("/api/user") }}",
        method: "get",
        headers: {
            "Authorization": "Bearer " + token
        },
        success: (response) => {
            console.log("success GET /user", response);
            $(".list-items .item").remove();

            data = response.data;
            $(".header .navbar-text span").text(response.login);
        },
        error: (response) => {
            console.log("error GET /user", response);
            localStorage.removeItem("user_token");
            location.href = "{{ url("/") }}";

        }
    })

    $(".navbar-text .svg").click(function () {
        localStorage.removeItem("user_token");
        location.href = "{{ url("/") }}";
    })
</script>

