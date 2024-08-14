<div id="sidepanel">
    <div id="profile">
        <div class="wrap">
            <img id="profile-img" src="{{ asset('default-images/avatar.jpg') }}" class="online" alt="" />
            <p>{{ auth()->user()->name }}</p>
            <i class="fa fa-chevron-down expand-button" aria-hidden="true"></i>
            <div id="status-options">
                <ul>
                    <li id="status-online" class="active"><span class="status-circle"></span>
                        <p>Online</p>
                    </li>
                    <li id="status-away"><span class="status-circle"></span>
                        <p>Away</p>
                    </li>
                    <li id="status-busy"><span class="status-circle"></span>
                        <p>Busy</p>
                    </li>
                    <li id="status-offline"><span class="status-circle"></span>
                        <p>Offline</p>
                    </li>
                </ul>
            </div>
            
        </div>
    </div>
       <hr> 
    <div id="contacts">
        <ul>
            @forelse($users as $user)
            <li class="contact">
                <div class="wrap">
                    <span class="contact-status online"></span>
                    <img src="http://emilcarlsson.se/assets/louislitt.png" alt="" />
                    <div class="meta">
                        <p class="name">Louis Litt</p>
                        <p class="preview">You just got LITT up, Mike.</p>
                    </div>
                </div>
            </li>
            @empty
            <p class="text-center">No users found</p>
            @endforelse
            
        </ul>
    </div>
  
</div>