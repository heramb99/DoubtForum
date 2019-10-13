<h3>Welcome {{ $user->name }}<h3>

<form action="{{ url('/logout') }}" method="get">

                        
                    <button type="submit">Logout</button>
                    </div>