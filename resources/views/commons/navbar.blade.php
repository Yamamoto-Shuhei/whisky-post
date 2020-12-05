<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        
        
        <a class="navbar-brand" href="/">Whisky-post</a>
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::check())
                     {{-- ユーザ一覧ページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('users.index', 'ユーザー一覧', [], ['class' => 'nav-link']) !!}</li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            {{-- ユーザ詳細ページへのリンク --}}
                            <li class="dropdown-item">{!! link_to_route('users.show','プロフィール',['user'=>Auth::id()]) !!}</li>
                            
                            <li class="dropdown-divider"></li>
                            {{-- ログアウトへのリンク --}}
                            <li class="dropdown-item">{!! link_to_route('logout.get','ログアウト') !!}</li>
                            
                        </ul>
                    </li>
                    
                @else
                    <li class="nav-item">{!! link_to_route('signup.get','ユーザー登録',[],['class'=>'nav-link']) !!}</li>
                    <li class="nav-item">{!! link_to_route('login','ログイン',[],['class'=>'nav-link']) !!}</li>
                @endif
            </ul>
        </div>
    </nav>
</header>
                     
                     
                        
                        