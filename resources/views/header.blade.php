<div id="header">
  <div class="col-lg-12 text-center">
    <img src="{{ asset('images/cea_logo.png')}}" class="cea_img">
  </div>
    <div class="row nav_menu_bg" >
      <div class="container">
        <div class="col-lg-11 text-center">
          <nav class="navbar navbar-expand-lg navbar-light navcustom">
            <a class="navbar-brand" href="/index_home">ホーム</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color: whitesmoke;">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li>
                    <a class="nav-link" href="/index_camp_description">キャンプの説明 </a>
                    </li>
                    <li>
                    <a class="nav-link" href="/index_jr_camp">ジュニアキャンプ </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/index_family_camp">ファミリーキャンプ</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/index_movie">動画</a>
                    </li>
                    @if(isset(Auth::user()->email))
                    <li class="nav-item">
                    <a class="nav-link" href=" {{ asset('/index_community_members')}}">コミュニティ</a>
                    </li>
                    @else
                    <li class="nav-item">
                    <a class="nav-link" href="/main">コミュニティ</a>
                    </li>
                    @endif
                    <li class="nav-item">
                    <a class="nav-link" href="/index_registration_agency">代理店様用</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/index_contact">お問い合わせ</a>
                    </li>
                </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
</div>