<div class="jsad-topmenu">
    <div class="d-flex">
        <div class="ml-auto jsad-flex">
            <div class="jsad-user-layout">
                <ul>
                    <li>
                        <a href="{{route('users.edit',auth()->user()->id)}}">{{ Auth::user()->name }}</a>
                    </li>
                    <li>
                        <i class="fa fa-sign-out" aria-hidden="true"></i><a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                            Logout
                        </a>
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
