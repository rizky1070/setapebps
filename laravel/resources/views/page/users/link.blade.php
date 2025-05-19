<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <title>link PRIBADI</title>
  </head>
  <body>
    <div class="d-lg-none">
        <img src="{{ asset('assets/image/Logo BPS Baru 2.png') }}" class="d-block mx-auto" width="256" alt="">
    </div>
    <div class="d-sm-none d-md-none d-lg-block d-smi-none">
        <img src="{{ asset('assets/image/Logo BPS Baru 2.png') }}" style="margin-left: 20px;" width="256" alt="">
    </div>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            {{-- <div class="d-sm-none d-md-none d-lg-block d-smi-none" style="margin-left: 500px; margin-top: -130px">
                <div class="" style="margin-top: -20px;"></div>
                @auth
                    @if (Auth::user()->roles == 'KETUA' || Auth::user()->roles == 'ADMIN')
                        <div class="seperti-itu text-center">
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button class="btn btn-danger">LogOut</button>
                            </form>
                            <form action="{{ route('links.index') }}" class="d-inline">
                                <button class="btn btn-primary">Menu Admin</button>
                            </form>
                            <form action="{{ route('link-kantor') }}" class="d-inline">
                                <button class="btn btn-primary">SUPER TIM</button>
                            </form>
                            <form action="{{ route('link-ketua') }}" class="d-inline">
                                <button class="btn btn-primary">SEKRETARIAT</button>
                            </form>
                        </div>
                    @else
                        <div class="seperti-itu text-center">
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button class="btn btn-danger">LogOut</button>
                            </form>
                            <form action="{{ route('links.index') }}" class="d-inline">
                                <button class="btn btn-primary">Menu Admin</button>
                            </form>
                            <form action="{{ route('link-kantor') }}" class="d-inline">
                                <button class="btn btn-primary">SUPER TIM</button>
                            </form>
                        </div>
                    @endif
                @else
                    <div class="seperti-itu text-center">
                        <a href="{{ route('login') }}" class="btn btn-primary">Log In</a>
                    </div>
                @endauth
            </div>
            <div class="d-lg-none" style="margin-top: -40px; margin-bottom: 70px">
                @auth
                    @if (Auth::user()->roles == 'KETUA' ||Auth::user()->roles == 'ADMIN')
                        <div class="seperti-itu text-center">
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button class="btn btn-danger">LogOut</button>
                            </form>
                            <form action="{{ route('links.index') }}" class="d-inline">
                                <button class="btn btn-primary">Menu Admin</button>
                            </form>
                            <form action="{{ route('link-kantor') }}" class="d-inline">
                                <button class="btn btn-primary">SUPER TIM</button>
                            </form>
                            <form action="{{ route('link-ketua') }}" class="mt-3">
                                <button class="btn btn-primary">Ketua Links</button>
                            </form>
                        </div>
                    @else
                        <div class="seperti-itu text-center">
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button class="btn btn-danger">LogOut</button>
                            </form>
                            <form action="{{ route('links.index') }}" class="d-inline">
                                <button class="btn btn-primary">Menu Admin</button>
                            </form>
                            <form action="{{ route('link-kantor') }}" class="d-inline">
                                <button class="btn btn-primary">SUPER TIM</button>
                            </form>
                        </div>
                    @endif
                @else
                    <div class="seperti-itu text-center">
                        <a href="{{ route('login') }}" class="btn btn-primary">Log In</a>
                    </div>
                @endauth
            </div> --}}
            <nav class="ml-auto" style="margin-top: -140px; margin-right: 10px">
                <div class="logo"></div>
                <ul>
                    @auth
                        @if (Auth::user()->roles == 'ADMIN' || Auth::user()->roles == 'SEKRETARIAT')
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="btn btn-danger">LogOut</button>
                            </form>
                            <li><a href="{{ route('links.index') }}">Menu Admin</a></li>
                            <li><a href="{{ route('link-kantor') }}">SUPER TIM</a></li>
                            <li><a href="{{ route('link-ketua') }}">SEKRETARIAT</a></li>
                        @else
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="btn btn-danger">LogOut</button>
                            </form>
                            <li><a href="{{ route('links.index') }}">Menu Admin</a></li>
                            <li><a href="{{ route('link-kantor') }}">SUPER TIM</a></li>
                        @endif
                    @else
                        <li><a href="{{ route('login') }}" class="btn btn-primary">Log In</a></li>
                    @endauth
                </ul>
                <div class="menu-toggle" onclick="toggle()">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
            <div class="col-md-12" style="margin-top: -70px">
                @auth
                    <div class="rounded-border d-inline text-uppercase mx-auto">
                        <h1 class="text-center h1-text">{{ Auth::user()->name }}</h1>
                    </div>
                    <div class="mt-4"></div>
                    <div class="rounded-border-2 mx-auto">
                        <h1 class="text-center h1-text">Sebagai : {{ Auth::user()->roles }}</h1>
                    </div>
                @endauth
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="mt-5"></div>
                <div class="mt-2"></div>
                <div class="seperti-itu mt-3">
                    {{-- @forelse ($links as $row)
                        @if ($row->name != null)
                            <a href="https://{{ $row->link }}" class="luweh-emboh emboh">
                                <p class="text-emboh text-embohparah">{{ $row->name }}</p>
                            </a>
                        @else
                            <a href="https://{{ $row->link }}" class="luweh-emboh emboh">
                                <p class="text-emboh text-embohparah">{{ $row->link }}</p>
                            </a>
                        @endif
                    @empty
                        <button class="luweh-emboh emboh red-bg">
                            <p class="text-emboh text-embohparah">user ini belum memiliki link</p>
                        </button>
                    @endforelse --}}
                    {{-- @forelse ($links as $l)
                        @if ($l->name != null)
                            <a href="https://{{ $l->link }}" class="luweh-emboh emboh">
                                <p class="text-emboh text-embohparah">{{ $l->name }}</p>
                            </a>
                        @else
                            <a href="https://{{ $l->link }}" class="luweh-emboh emboh">
                                <p class="text-emboh text-embohparah">{{ $l->link }}</p>
                            </a>
                        @endif
                        @foreach ($link as $ls)
                            @if ($ls->name != null)
                                <a href="{{ $ls->link }}" class="luweh-emboh emboh">
                                    <p class="text-emboh text-embohparah">{{ $ls->name }}</p>
                                </a>
                            @else
                                <a href="{{ $ls->link }}" class="luweh-emboh emboh">
                                    <p class="text-emboh text-embohparah">{{ $ls->link }}</p>
                                </a>
                            @endif
                        @endforeach
                    @empty
                        <a class="luweh-emboh emboh">
                            <p class="text-emboh text-embohparah">User belum memiliki link</p>
                        </a>
                    @endforelse --}}
                    @forelse ($category as $cat)
                        @if ($cat->links->count() != null)
                            <div class="text pt-4 pb-2">
                                <h1 class="text-h1 text-center">{{ $cat->name }}</h1>
                            </div>
                        @foreach ($cat->links->where('user_id', Auth::id()) as $link)
                            @if ($link->name != null)
                                @if (strpos($link->link, 'http') === 0 || strpos($link->link, 'https') === 0)
                                    <a target="_blank" href="{{ $link->link }}" class="luweh-emboh emboh">
                                        <p class="text-emboh text-embohparah">{{ $link->name }}</p>
                                    </a>
                                @else
                                    <a target="_blank" href="https://{{ $link->link }}" class="luweh-emboh emboh">
                                        <p class="text-emboh text-embohparah">{{ $link->name }}</p>
                                    </a>
                                @endif
                            @else
                                @if (strpos($link->link, 'http') === 0 || strpos($link->link, 'https') === 0)
                                    <a target="_blank" href="{{ $link->link }}" class="luweh-emboh emboh">
                                        <p class="text-emboh text-embohparah">{{ $link->link }}</p>
                                    </a>
                                @else
                                    <a target="_blank" href="https://{{ $link->link }}" class="luweh-emboh emboh">
                                        <p class="text-emboh text-embohparah">{{ $link->link }}</p>
                                    </a>
                                @endif
                            @endif
                        @endforeach
                        @else
                        
                        @endif
                    @empty
                        <a class="luweh-emboh-1 emboh">
                            <p class="text-emboh text-embohparah">User belum memiliki link yang berkategori</p>
                        </a>
                    @endforelse
                    @if ($linkTotal > 0)
                    <h1 class="h1-text text-center mt-5">Link Tanpa Kategori</h1>
                        @foreach ($link as $l)
                            @if ($l->name != null)
                                @if (strpos($l->link, 'http') === 0 || strpos($l->link, 'https') === 0)
                                    <a href="{{ $l->link }}" class="luweh-emboh emboh">
                                        <p class="text-emboh text-embohparah">{{ $l->name }}</p>
                                    </a>
                                @else
                                    <a href="https://{{ $l->link }}" class="luweh-emboh emboh">
                                        <p class="text-emboh text-embohparah">{{ $l->name }}</p>
                                    </a>
                                @endif
                            @else
                                @if (strpos($l->link, 'http') === 0 || strpos($l->link, 'https') === 0)
                                    <a href="{{ $l->link }}" class="luweh-emboh emboh">
                                        <p class="text-emboh text-embohparah">{{ $l->link }}</p>
                                    </a>
                                @else
                                    <a href="https://{{ $l->link }}" class="luweh-emboh emboh">
                                        <p class="text-emboh text-embohparah">{{ $l->link }}</p>
                                    </a>
                                @endif
                            @endif
                        @endforeach
                    @endif
                    {{-- @if (Auth::user()->roles == 'KETUA')
                        @forelse ($category as $cat)
                            @foreach ($link as $l)
                                @foreach ($cat->links as $li)
                                    @if ($li->link != $l->link)
                                        <a href="{{ $li->link }}" class="luweh-emboh emboh">
                                            <p class="text-emboh text-embohparah">{{ $li->link }}</p>
                                        </a>
                                    @else
                                        <a href="https://{{ $li->link }}" class="luweh-emboh emboh">
                                            <p class="text-emboh text-embohparah">{{ $li->link }}</p>
                                        </a>
                                    @endif
                                @endforeach
                            @endforeach
                        @empty
                            <a class="luweh-emboh emboh">
                                <p class="text-emboh text-embohparah">User belum memiliki link</p>
                            </a>
                        @endforelse
                        @foreach ($ketua as $k)
                            @if ($k->name != null)
                                <a href="{{ $k->link }}" class="luweh-emboh emboh">
                                    <p class="text-emboh text-embohparah">{{ $k->name }}</p>
                                </a>
                            @else
                                <a href="{{ $k->link }}" class="luweh-emboh emboh">
                                    <p class="text-emboh text-embohparah">{{ $k->link }}</p>
                                </a>
                            @endif
                            @foreach ($ketuas as $ks)
                                @if ($ks->name != null)
                                    <a href="https://{{ $ks->link }}" class="luweh-emboh emboh">
                                        <p class="text-emboh text-embohparah">{{ $ks->name }}</p>
                                    </a>
                                @else
                                    <a href="https://{{ $ks->link }}" class="luweh-emboh emboh">
                                        <p class="text-emboh text-embohparah">{{ $ks->link }}</p>
                                    </a>
                                @endif
                            @endforeach
                        @endforeach
                    @else
                        @forelse ($links as $l)
                            @if ($l->name != null)
                                <a href="https://{{ $l->link }}" class="luweh-emboh emboh">
                                    <p class="text-emboh text-embohparah">{{ $l->name }}</p>
                                </a>
                            @else
                                <a href="https://{{ $l->link }}" class="luweh-emboh emboh">
                                    <p class="text-emboh text-embohparah">{{ $l->link }}</p>
                                </a>
                            @endif
                            @foreach ($link as $ls)
                                @if ($ls->name != null)
                                    <a href="{{ $ls->link }}" class="luweh-emboh emboh">
                                        <p class="text-emboh text-embohparah">{{ $ls->name }}</p>
                                    </a>
                                @else
                                    <a href="{{ $ls->link }}" class="luweh-emboh emboh">
                                        <p class="text-emboh text-embohparah">{{ $ls->link }}</p>
                                    </a>
                                @endif
                            @endforeach
                    @empty
                        <a class="luweh-emboh emboh">
                            <p class="text-emboh text-embohparah">User belum memiliki ini</p>
                        </a>
                    @endforelse
                    @endif --}}
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="mt-5"></div>
                <div class="mt-2"></div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script>
        const nav = document.querySelector('nav ul');
        function toggle() {
            nav.classList.toggle('slide');
        }
    </script>
  </body>
</html>