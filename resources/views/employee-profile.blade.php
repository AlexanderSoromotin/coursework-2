<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Сотрудник</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
    </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @include("main")
</head>
<body class="antialiased">

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-U7lIU2LF2S9T5hggf1fcZzpa9Tc/K2GQJbr8deYPLb8RXdz9sScvRD2lkF2bSQQ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js"></script>


@include("header")


<div class="main-container container">
    <h1 class="page-title">
        Сотрудник
    </h1>

    <div class="user-personal-data">
        <div class="user-data">
            <div class="image">
                <img src="{{ url("/img/avatars/unknown_user.png") }}" alt="">

                <div class="action-buttons">
                    <button class="change-avatar btn btn-primary">Изменить изображение</button>
                    <button class="fire btn btn-secondary">Уволить</button>

                    <input hidden type="file" id="employeeAvatar">
                </div>
            </div>
            <div class="data">
                <div class="form-group" data-name="last_name">
                    <label for="employeeLastname">Фамилия</label>
                    <input type="text" class="form-control" id="employeeLastname" placeholder="Введите фамилию">
                </div>

                <div class="form-group" data-name="first_name">
                    <label for="employeeFirstname">Имя</label>
                    <input type="text" class="form-control" id="employeeFirstname" placeholder="Введите имя">
                </div>

                <div class="form-group" data-name="patronymic">
                    <label for="employeePatronymic">Отчество</label>
                    <input type="text" class="form-control" id="employeePatronymic" placeholder="Введите отчество">
                </div>

                <div class="form-group" data-name="work_phone_number">
                    <label for="employeeWorkPhoneNumber">Рабочий номер телефона</label>
                    <input type="text" class="form-control" id="employeeWorkPhoneNumber" placeholder="Введите рабочий номер телефона">
                </div>

                <div class="form-group" data-name="personal_phone_number">
                    <label for="employeePersonalPhoneNumber">Личный номер телефона</label>
                    <input type="text" class="form-control" id="employeePersonalPhoneNumber" placeholder="Введите личный номер телефона">
                </div>

                <div class="form-group" data-name="birthdate">
                    <label for="employeeBirthdate">Дата рождения</label>
                    <input type="date" class="form-control" id="employeeBirthdate" placeholder="Введите дату рождения" max="">
                </div>

                <div class="form-group" data-name="gender">
                    <label for="employeeGender">Пол</label>
                    <select class="form-control" name="" id="employeeGender">
                        <option value="муж">Муж</option>
                        <option value="жен">Жен</option>
                    </select>
                </div>

                <div class="form-group" data-name="bank_account_number">
                    <label for="employeeBankAccount">Номер банковского счёта</label>
                    <input type="text" class="form-control" id="employeeBankAccount" placeholder="Введите номер банковского счёта">
                </div>

                <div class="form-group" data-name="bank_id">
                    <label for="employeeBankName">Наименование банка</label>
                    <select class="form-control" name="" id="employeeBankName">
                        <option value="1">Сбербанк</option>
                        <option value="2">ВТБ Банк</option>
                        <option value="3">Газпромбанк</option>
                        <option value="4">Альфа-Банк</option>
                        <option value="5">Росбанк</option>
                        <option value="6">ЮниКредит Банк</option>
                        <option value="7">Райффайзенбанк</option>
                        <option value="8">Совкомбанк</option>
                        <option value="9">Тинькофф Банк</option>
                        <option value="10">Хоум Кредит Банк</option>
                        <option value="11">Банк Открытие</option>
                        <option value="12">Ренессанс Кредит</option>
                        <option value="13">Банк Москвы</option>
                        <option value="14">Промсвязьбанк</option>
                        <option value="15">Россельхозбанк</option>
                        <option value="16">Банк Уралсиб</option>
                        <option value="17">Банк Зенит</option>
                        <option value="18">Ак Барс Банк</option>
                        <option value="19">Банк Восточный</option>
                        <option value="20">Банк Санкт-Петербург</option>
                    </select>
                </div>

                <div class="form-group" data-name="passport">
                    <label for="employeePassport">Паспорт</label>
                    <input type="text" class="form-control" id="employeePassport" placeholder="Введите серию и номер паспорта">
                </div>

                <div class="form-group" data-name="snils_number">
                    <label for="employeeSNILS">СНИЛС</label>
                    <input type="text" class="form-control" id="employeeSNILS" placeholder="Введите СНИЛС">
                </div>

                <div class="form-group" data-name="inn">
                    <label for="employeeINN">ИНН</label>
                    <input type="text" class="form-control" id="employeeINN" placeholder="Введите ИНН">
                </div>

                <div class="form-group" data-name="hire_date">
                    <label for="employeeHireDate">Дата найма</label>
                    <input type="date" class="form-control" id="employeeHireDate" placeholder="Введите дату найма" max="">
                </div>

                <div class="form-group" data-name="position_id">
                    <label for="EmployeePosition">Должность</label>
                    <select class="form-control" name="" id="EmployeePosition">
                        <option value="null"></option>
                        <option value="1">Тренер по фитнесу</option>
                        <option value="2">Массажист</option>
                        <option value="3">Администратор фитнес-центра</option>
                        <option value="4">Уборщик</option>
                        <option value="5">Менеджер по персоналу</option>
                    </select>
                </div>

            </div>
        </div>

    </div>

    <div class="multi-block">
        <div class="leaves">
            <div class="page-title">
                <h5>Периоды выбывания</h5>
            </div>

            <div class="history-card">
                <div class="add-item">
                    <div class="form-group">
                        <label for="leaveStartDate">Дата начала периода</label>
                        <input type="date" class="form-control" id="leaveStartDate" placeholder="Введите дату найма" max="">
                    </div>

                    <div class="form-group">
                        <label for="leaveEndDate">Дата окончания периода</label>
                        <input type="date" class="form-control" id="leaveEndDate" placeholder="Введите дату найма" max="">
                    </div>

                    <div class="form-group" data-name="bank_id">
                        <label for="leaveId">Причина выбывания</label>
                        <select class="form-control" name="" id="leaveId">
                            <option value="1">Болезнь</option>
                            <option value="2">Отпуск</option>
                            <option value="3">Повышение квалификации</option>
                            <option value="4">Другое</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="leaveDescription">Описание</label>
                        <textarea id="leaveDescription" name="" id="" cols="30" rows="3"></textarea>
                    </div>

                    <button class="btn btn-primary">Добавить</button>
                </div>
                <div class="history">
                    <span>История</span>
                    <div class="list">

                    </div>
                </div>
            </div>

        </div>

        <div class="work-hours">
            <div class="page-title">
                <h5>Рабочие отчёты</h5>
            </div>

            <div class="history-card">
                <div class="add-item">
                    <div class="form-group">
                        <label for="workHoursStartTime">Время выхода на работу</label>

                        <input type="text" class="form-control" id="workHoursStartTime" placeholder="" max="">
                    </div>

                    <div class="form-group">
                        <label for="workHoursEndTime">Время ухода с работы</label>
                        <input type="text" class="form-control" id="workHoursEndTime" placeholder="" max="">
                    </div>

                    <div class="form-group">
                        <label for="workHoursDate">Дата</label>
                        <input type="date" class="form-control" id="workHoursDate" placeholder="Введите дату найма" max="">
                    </div>

                    <button class="btn btn-primary">Добавить</button>
                </div>
                <div class="history">
                    <span>История</span>
                    <div class="list">

                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="files">
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addFile" tabindex="-1" role="dialog" aria-labelledby="addFile" aria-hidden="true" data-file-group-id="1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEmployeeModalLabel">Добавить новый файл</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="employeeLastname">Название</label>
                    <input type="text" class="form-control" id="employeeLastname" placeholder="Введите название файла">
                </div>

                <div class="form-group">
                    <label for="employeeFirstname">Файл</label>
                    <input type="file" class="form-control" id="employeeFirstname" placeholder="Выберите файл" accept=".png,.jpg,.jfif,.jpeg,.doc,.docx,.ppt,.pptx,.xls,.xlsx">
                </div>

                <button type="button" class="btn btn-primary">Добавить</button>
            </div>
        </div>
    </div>
</div>

<!-- Error Notification -->
<div id="errorNotification" class="alert alert-danger" role="alert" style="display: none;"></div>
<!-- Подключение библиотеки Bootstrap Datepicker и её зависимостей -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.ru.min.js"></script>

<script>
    var itemId = Number("{{ $id }}");

    $(document).ready(function(){
        $('#employeeWorkPhoneNumber').inputmask("+7 (999) 999-99-99");
        $('#employeePersonalPhoneNumber').inputmask("+7 (999) 999-99-99");
        $('#employeePassport').inputmask("99 99 999999");
        $('#employeeSNILS').inputmask("999-999-999 99");
        $('#employeeINN').inputmask("9999999999");
        $('#employeeKPP').inputmask("999999999");
        $('#employeeBankAccount').inputmask("40899999999999999999");

        $('#workHoursStartTime').inputmask("99:99", {
            // placeholder: "00:00",
            alias: "datetime",
            hourFormat: "24",
            alias: "datetime",
            inputFormat: "hh:mm"
        });
        $('#workHoursEndTime').inputmask("99:99", {
            // placeholder: "00:00",
            alias: "datetime",
            hourFormat: "24",
            alias: "datetime",
            inputFormat: "hh:mm"
        });
    });

    function showErrorNotification(text) {
        $('#errorNotification').text(text).fadeIn().delay(2000).fadeOut();
    }

    function updateEmployeeData () {
        $.ajax({
            url: "{{ url("/api/employees") }}/" + itemId,
            method: "get",
            headers: {
                "Authorization": "Bearer " + token
            },
            success: (response) => {
                console.log("success GET /employee/" + itemId, response);
                data = response.data;

                // data.bank_account_number = data.bank_account_number.replace("480", "");

                $("#employeeLastname").val(data.last_name);
                $("#employeeFirstname").val(data.first_name);
                $("#employeePatronymic").val(data.patronymic);
                $("#employeeWorkPhoneNumber").val(data.work_phone_number);
                $("#employeePersonalPhoneNumber").val(data.personal_phone_number);
                $("#employeeBirthdate").val(formatDate(data.birthdate));
                $("#employeeGender").val(data.gender);
                $("#employeeBankAccount").val(data.bank_account_number);
                $("#employeeBankName").val(data.bank_id);
                $("#employeePassport").val(data.passport_serial + " " + data.passport_number);
                $("#employeeSNILS").val(data.snils_number);
                $("#employeeINN").val(data.inn);
                $("#employeeHireDate").val(formatDate(data.hire_date));
                $(".user-data .image img").attr("src", "{{ url("/img/avatars") }}/" + data.avatar);

                $("#EmployeePosition").val(data.position[0].position.id);
            },
            error: (response) => {
                console.log("error GET /employee/" + itemId, response);
            }
        })
    }
    updateEmployeeData();

    function getEmployeeFiles () {
        $.ajax({
            url: "{{ url("/api/files/groups") }}/",
            method: "get",
            headers: {
                "Authorization": "Bearer " + token
            },
            success: (response) => {
                console.log("success GET /files/groups/" + itemId, response);
                data = response.data;

                $(".files").text('');

                for (i in data) {
                    var item = data[i];

                    $(".files").append(`
                        <div class="files-group" data-group-id="${item.id}">
                            <h5 class="page-title">
                                ${item.name}
                                <div class="add-file btn btn-primary mini" data-toggle="modal" data-target="#addFile">Добавить</div>
                            </h5>
                            <div class="files-list">
                                <div class="filler">Здесь пусто 😶</div>
                            </div>
                        </div>`)

                    $.ajax({
                        url: "{{ url("/api/employees") }}/" + itemId + "/file-groups/" + item.id + "/files",
                        method: "get",
                        headers: {
                            "Authorization": "Bearer " + token
                        },
                        success: (response) => {
                            console.log("success " + "/employees/" + itemId + "/file-groups/" + item.id + "/files" + itemId, response);
                            data = response.data;

                            $(".files").text();

                            for (i in data) {
                                file = data[i];

                                $(".files-group[data-group-id='" + file.file_group_id + "'] .files-list").append(`
                                <a download href="{{ url("/storage") }}/${file.url}">
                                    <div class="file" data-file-id="${file.id}">
                                        <div class="image">
                                            <img src="{{ url("/img/file.png") }}" alt="">
                                        </div>
                                        <div class="name">${file.name}</div>
                                        <button class="btn btn-secondary">Удалить</button>
                                        <img class="svg remove-file" src="{{ url("/img/icons/x.svg") }}">
                                    </div>

                                </a>`)
                            }
                            countFiles();
                        },
                        error: (response) => {
                            console.log("error " + "/employees/" + itemId + "/file-groups/" + item.id + "/files" + itemId, response);
                        }
                    })

                }
            }
        })
    }
    getEmployeeFiles()

    savePersonalInfo = setTimeout(() => {}, 10);
    $(".user-data input, .user-data select").on("input keyup", function () {
        clearTimeout(savePersonalInfo);
        var userData = new Object();
        savePersonalInfo = setTimeout(() => {
            $(".user-data .data .form-group").each(function (i) {
                item = $(".user-data .data .form-group:eq(" + i + ")");

                if (item.find("input").length != 0) {
                    child = item.find("input");
                } else {
                    child = item.find("select");
                }

                fieldName = item.attr("data-name");
                fieldValue = child.val();

                console.log(fieldValue);

                if (fieldValue == "") {
                    fieldValue = null;
                    userData[fieldName] = fieldValue;
                } else {
                    if (fieldName === "passport") {
                        value = fieldValue.split(" ")
                        userData["passport_serial"] = `${value[0]}${value[1]}`;
                        userData["passport_number"] = value[2];

                    } else if (fieldName === "snils_number") {
                        fieldValue = fieldValue.replaceAll(" ", "").replaceAll("-", "")
                        userData[fieldName] = fieldValue;

                    } else if (fieldName === "birthdate" || fieldName === "hire_date") {
                        // Преобразуем дату в нужный формат
                        formattedDate = new Date(fieldValue).toISOString().replace(/T/, ' ').replace(/\..+/, '');

                        userData[fieldName] = formattedDate;

                    } else if (fieldName === "position_id") {
                        $.ajax({
                            url: "{{ url("/api/") }}/employees/" + itemId + "/positions/" + fieldValue,
                            method: "post",
                            headers: {
                                "Authorization": "Bearer " + token
                            },
                            data: userData,
                            success: (response) => {
                                console.log("success PATCH /employees/" + itemId + "/positions/" + fieldValue, response);

                            },
                            error: (response) => {
                                console.log("error PATCH /employees/" + itemId + "/positions/" + fieldValue, response);
                            }
                        })
                    } else {
                        userData[fieldName] = fieldValue;
                    }
                }
            })
            console.log(userData);

            $.ajax({
                url: "{{ url("/api/") }}/employees/" + itemId,
                method: "patch",
                headers: {
                    "Authorization": "Bearer " + token
                },
                data: userData,
                success: (response) => {
                    console.log("success PATCH /employees", response);
                    // updateEmployeeData();
                },
                error: (response) => {
                    showErrorNotification("Произошла ошибка");
                }
            })
        }, 1000);
    })

    $(document).on("click", ".add-file", function () {
        groupId = $(this).parents(".files-group").attr("data-group-id");
        $("#addFile").attr("data-group-id", groupId);
        console.log(groupId);
    })

    function formatDate(dateString, type = 1) {
        if (dateString === null) {
            return "";
        }

        if (type === 1) {
            // Преобразование строки в объект Date
            var dateObject = new Date(dateString);

            // Получение компонентов даты
            var year = dateObject.getFullYear();
            var month = ('0' + (dateObject.getMonth() + 1)).slice(-2);
            var day = ('0' + dateObject.getDate()).slice(-2);

            // Формирование строки для установки значения в элементе input
            return year + '-' + month + '-' + day;
        }

        if (type === 2) {
            // Преобразование строки в объект Date
            var dateObject = new Date(dateString);

            // Получение компонентов даты
            var year = dateObject.getFullYear();
            var month = ('0' + (dateObject.getMonth() + 1)).slice(-2);
            var day = ('0' + dateObject.getDate()).slice(-2);

            // Формирование строки для установки значения в элементе input
            return day + "." + month + '.' + year;
        }

    }

    $("#addFile .btn-primary").click(function () {
        var formData = new FormData();
        var fileInput = $('#addFile input[type="file"]')[0].files[0];
        var groupId = $("#addFile").attr("data-group-id")
        name = $("#addFile input[type='text']").val();
        console.log("groupId", groupId)

        if (name == "" || name.replaceAll(" ", "").length == 0) {
            alert("Укажите имя для файла")
            return;
        }

        if (fileInput) {
            formData.append('file', fileInput);
            formData.append('name', name);

            $.ajax({
                url: '{{ url("/api/employees") }}/' + itemId + '/file-groups/' + groupId + "/files",
                type: 'POST',
                headers: {
                    "Authorization": "Bearer " + token
                },
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    console.log('success POST {{ url("/api/employees") }}/' + itemId + '/file-groups/' + groupId + "/files", response);
                    getEmployeeFiles();
                    $('#addFile input[type="file"]').val('')
                    $('#addFile input[type="text"]').val('')
                    $('#addFile .close').click();
                },
                error: function (error) {
                    console.log('error POST {{ url("/api/employees") }}/' + itemId + '/file-groups/' + groupId + "/files", response);
                }
            });
        } else {
            console.error('Please select a file to upload.');
            alert("Выберите файл")
        }
    })

    function countFiles() {
        $(".files-group").each(function (i) {
            item = $(".files-group:eq(" + i + ")");

            if (item.find(".file").length == 0) {
                item.find(".filler").css({"display": "flex"});
            } else {
                item.find(".filler").css({"display": "none"});
            }
        })
    }

    $(document).on("click", ".files .file .remove-file", function (e) {
         e.preventDefault();
         fileId = $(this).parents(".file").attr("data-file-id");
         var file = $(this).parents(".file").parent();

         if (confirm("Вы действительно хотите удалить этот файл?")) {
             $.ajax({
                 url: '{{ url("/api/files") }}/' + fileId,
                 type: 'delete',
                 headers: {
                     "Authorization": "Bearer " + token
                 },
                 success: function (response) {
                     console.log('success DELETE /files', response);
                     // getEmployeeFiles();
                     file.remove()
                     countFiles()
                 },
                 error: function (error) {
                     console.error('error DELETE /files', error);
                 }
             });
         }
    });

    $(".change-avatar").click(function () {
        $("#employeeAvatar").click();
    })

    $("#employeeAvatar").on("input keyup", function () {
        var formData = new FormData();
        var fileInput = $('#employeeAvatar')[0].files[0];

        if (fileInput) {
            formData.append('file', fileInput);

            $.ajax({
                url: '{{ url("/api/employees") }}/' + itemId + "/avatar",
                type: 'post',
                headers: {
                    "Authorization": "Bearer " + token
                },
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    console.log('success POST {{ url("/api/employees") }}/' + itemId, response);
                    updateEmployeeData();

                },
                error: function (error) {
                    console.log('error POST {{ url("/api/employees") }}/' + itemId, response);
                }
            });
        } else {
            console.error('Please select a file to upload.');
            alert("Выберите файл")
        }
    });

    function updateLeaves() {
        $.ajax({
            url: '{{ url("/api/employees") }}/' + itemId + "/leaves",
            type: 'get',
            headers: {
                "Authorization": "Bearer " + token
            },
            success: function (response) {
                console.log('success POST {{ url("/api/employees") }}/' + itemId + "/leaves", response);
                leaves = response.data;

                $(".leaves .list").text('');

                for (i in leaves) {
                    item = leaves[i];
                    console.log(item)

                    if (item.description === null) {
                        item.description = "";
                    }

                    // if (item.lave_type_name == null) {
                    //     item.lave_type_name = ""
                    // }

                    $(".leaves .list").append(`
                        <div class="item">
                            <h6 class="date">${formatDate(item.start_date, 2)} - ${formatDate(item.end_date, 2)}</h6>
                            <p class="leave-type">${item.leave_type_name}</p>
                            <p class="leave-description">${item.description}</p>
                        </div>
                    `)
                }
            },
            error: function (response) {
                console.log('error POST {{ url("/api/employees") }}/' + itemId + "/leaves", response);
            }
        });
    }
    updateLeaves();


    $(".leaves .add-item .btn").click(function () {
        startDate = $("#leaveStartDate").val();
        endDate = $("#leaveEndDate").val();
        leaveId = $("#leaveId").val();
        description = $("#leaveDescription").val();

        if (startDate == "") {
            alert("Выберите дату начала периода")
            return;
        }

        if (endDate == "") {
            alert("Выберите дату окончания периода")
            return;
        }

        if (leaveId == "") {
            alert("Выберите причину")
            return;
        }

        $.ajax({
            url: '{{ url("/api/employees") }}/' + itemId + "/leaves",
            type: 'post',
            headers: {
                "Authorization": "Bearer " + token
            },
            data: {
                start_date: startDate,
                end_date: endDate,
                leave_type_id: leaveId,
                description: description
            },
            success: function (response) {
                console.log('success POST {{ url("/api/employees") }}/' + itemId + "/leaves", response);
                updateLeaves();

            },
            error: function (response) {
                console.log('error POST {{ url("/api/employees") }}/' + itemId + "/leaves", response);
            }
        });
    })

    function updateWorkTime() {
        $.ajax({
            url: '{{ url("/api/employees") }}/' + itemId + "/work-time",
            type: 'get',
            headers: {
                "Authorization": "Bearer " + token
            },
            success: function (response) {
                console.log('success POST {{ url("/api/employees") }}/' + itemId + "/work-time", response);
                leaves = response.data;

                $(".work-hours .list").text('');

                for (i in leaves) {
                    item = leaves[i];
                    console.log(item)

                    if (item.description === null) {
                        item.description = "";
                    }

                    if (item.type_name != null) {
                        item.type_name = ""
                    }


                    $(".work-hours .list").append(`
                        <div class="item">
                            <h6 class="date">${formatDate(item.date, 2)}</h6>
                            <p class="hours">${item.start_time.substring(0, 5)} - ${item.end_time.substring(0, 5)}</p>
                        </div>
                    `)
                }
            },
            error: function (response) {
                console.log('error POST {{ url("/api/employees") }}/' + itemId + "/work-time", response);
            }
        });
    }
    updateWorkTime();

    $(".work-hours .add-item .btn").click(function () {
        time1 = $("#workHoursStartTime").val();
        time2 = $("#workHoursEndTime").val();
        date = $("#workHoursDate").val();

        if (time1 == "") {
            alert("Выберите первое время")
            return;
        }

        if (time2 == "") {
            alert("Выберите второе время")
            return;
        }

        if (date == "") {
            alert("Выберите дату")
            return;
        }

        $.ajax({
            url: '{{ url("/api/employees") }}/' + itemId + "/work-time",
            type: 'post',
            headers: {
                "Authorization": "Bearer " + token
            },
            data: {
                start_time: time1,
                end_time: time2,
                date: date,
            },
            success: function (response) {
                console.log('success POST {{ url("/api/employees") }}/' + itemId + "/work-time", response);
                updateLeaves();

            },
            error: function (response) {
                console.log('error POST {{ url("/api/employees") }}/' + itemId + "/work-time", response);
            }
        });
    })

    $(".fire").click(function () {
        if (confirm("Вы уверены, что хотите удалить сотрудника?"))
        $.ajax({
            url: '{{ url("/api/employees") }}/' + itemId,
            type: 'delete',
            headers: {
                "Authorization": "Bearer " + token
            },
            success: function (response) {
                console.log('success DELETE {{ url("/api/employees") }}/' + itemId, response);
                location.href = "{{ url("/employees") }}";

            },
            error: function (response) {
                console.log('error DELETE {{ url("/api/employees") }}/' + itemId, response);
            }
        });
    })
</script>
</body>

<style>
    body {
        padding-bottom: 100px;
    }
    .user-personal-data {
        display: flex;
        padding-top: 30px;
    }
    .user-personal-data .user-data {
        display: flex;
    }
    .user-personal-data .user-data .data {
         display: flex;
        max-width: calc(100% - 325px);
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .user-personal-data .user-data .data .form-group {
        width: calc(100% / 3 - 20px);
        min-width: 230px;
        margin-bottom: 24px;
    }
    .user-personal-data .image {
        width: 300px;
        height: 300px;
    }
    .user-personal-data .image {
        margin-right: 25px;
    }
    .user-personal-data .image img {
        position: relative;
        width: 100%;
        height: 100%;
        border-radius: 30px;
        object-fit: cover;
    }

    .files-list {
        display: flex;
        flex-wrap: wrap;
        background-color: #fff;
        border-radius: 20px;
        padding: 20px 5px 5px 20px;
    }
    .files-list a {
        position: relative;
        min-width: 180px;
        width: calc(100% / 5 - 15px);
        margin-right: 15px;
    }
    .files-list .file {
        position: relative;
        width: 100%;
        height: 220px;
        border-radius: 10px;
        padding-top: 15px;
        display: flex;
        flex-direction: column;
        align-items: center;
        border: 1px solid rgba(0, 0, 0, .1);
        margin-right: 15px;
        margin-bottom: 15px;
    }
    .files-list .file .image {
        height: calc(100% * 0.6 - 15px);
        padding-top: 30px;
        transform: scale(.8);
    }
    .files-list .file img {
        position: relative;
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    .files-list .file .name {
        font-size: 13px;
        margin-top: 30px;
    }
    .files-list .file button {
        display: none;
    }
    .files-list .file .remove-file {
        position: absolute;
        top: 5px;
        right: 5px;
        width: 24px;
        height: 24px;
        display: none;
    }
    .files-list .file:hover .remove-file {
        display: inline;
    }
    .files-list .file .remove-file:hover {
        opacity: 1;
    }

    .files-list .filler {
        width: 100%;
        height: 60px;
        opacity: .4;
        justify-content: center;
        align-items: center;
        display: flex;
        margin-bottom: 15px;
    }

    .action-buttons {
        width: 100%;
        margin-top: 20px;
    }
    .action-buttons button {
        width: 100%;
        margin-bottom: 10px;
    }

    .multi-block {
        display: flex;
        justify-content: space-between;
        margin-top: 80px;
        margin-bottom: 90px;
        height: 570px;
    }
    .multi-block .leaves {
        width: calc(50% - 20px);
    }
    .multi-block .page-title {
        margin-bottom: 10px;
    }
    .history-card {
        position: relative;
        display: flex;
        /*width: 100%;*/
        max-width: 100%;
        border-radius: 20px;
        background-color: #fff;
        height: 500px;
    }
    .multi-block .history-card .btn {
        position: absolute;
        bottom: 20px;
        left: 20px;
        width: calc(100% - 40px);
    }
    .history-card .add-item {
        position: relative;
        padding: 20px;
        max-width: 240px;
        border-right: 1px solid rgba(0, 0, 0, .05);
        height: 100%;
    }
    .history-card .add-item button {
        width: 100%;
    }
    .history-card .history {
        padding: 20px;
        width: 100%;
        height: 100%;
    }
    .history-card .history .list {
        width: 100%;
        padding-top: 30px;
        overflow-y: scroll;
        max-height: 426px;
    }
    .history-card .history .item {
        border: 1px solid rgba(0, 0, 0, .05);
        border-radius: 10px;
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
    }
    .history-card .history .item .date span {
        font-weight: 400;
        color: rgba(0, 0, 0, .5);
        margin-left: 20px;
    }
    .history-card .history .item .leave-description {
        font-weight: 400;
        color: rgba(0, 0, 0, .5);
        margin-bottom: 0px;
    }

    .work-hours {
        position: relative;
        width: calc(50% - 20px);
        height: 100%;
    }
    .work-hours .add-item {
        padding: 20px;
        max-width: 240px;
        min-width: 240px;
        border-right: 1px solid rgba(0, 0, 0, .05);
        height: 100%;
    }
    .work-hours .history {
        padding: 20px;
        width: 100%;
        height: 100%;
    }
    .work-hours .history .hours {
        font-weight: 400;
        margin-bottom: 0;
    }
</style>


</html>
