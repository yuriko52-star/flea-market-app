<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FLEA MARKET</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
            <a href="" class="header__logo">
                <img src="{{ asset('images/CoachTech_White 1.png') }}
            " alt="" class="">
            </a>
            
             <!-- ログイン・登録画面ではナビゲーションを非表示 -->
            <!-- @if (!Request::is('<auth>login') && !Request::is('auth/register')) -->
            <form action="" class="search-form" method="">
                <input type="text" class="search-form__input" placeholder="なにをお探しですか？">
            </form>
            
            <div class="button-item">
                <form action="" class="" method="">
                    <button class="btn">ログアウト</button>
                </form>
                    
                
                    
                <form action="" class="" method="">
                    <button class="btn">マイページ</button>
                </form>
                
                <form action="" class="" method="">
                    <button class=" btn sell-btn">出品</button>
                </form>
            </div>
            
            <!-- @endif -->
            </div>
        </div>
        
    </header>

    <main>

        
        @yield('content')

        
    </main>    
   

</body>
</html>