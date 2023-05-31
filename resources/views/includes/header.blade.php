<nav class='navbar'>
    <ul class='list'>
        <li class='item'>
            <a href="/contacts"> List Contact </a>
        </li>
        @if (session()->has('login'))
            <li class='item'>
                <a href="/contact"> New Contact </a>
            </li>
            <li class='item'>
                <a href="/logout"> Logout </a>
            </li>
        @endif
    </ul>

</nav>
