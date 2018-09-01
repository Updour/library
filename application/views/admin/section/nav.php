
       <div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" 
                    src="<?php echo base_url('assets').'/' ?>img/user.gif" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> Joe Romlin</h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">


                <li class="panel"> 
                    <a href="{admin}" class="accordion-toggle">
                        <i class="icon-home"></i> Home</a>
                </li> 
                 <li class="panel"> 
                    <a href="{admin}/daftar/all" class="accordion-toggle">
                        <i class="icon-th-list"></i> Daftar Perpustakaan</a>
                </li>
                 <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                        <i class="icon-table"></i> Halaman
       
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-info">3</span>&nbsp;
                    </a>
                    <ul class="collapse" id="pagesr-nav">
                        <li><a href="{admin}/daftar/buku "><i class="icon-book"></i> Buku </a></li>
                        <li><a href="{admin}/daftar/pengunjung"><i class="icon-group"></i> Pengunjung </a></li>
                        <li><a href="{admin}daftar/user"><i class="icon-user-md"></i> Pengguna </a></l</li>
                    </ul>
                </li>
                </li>
                <li><a href="{index}login"><i class="icon-eye-close"></i> Logout page </a></li>

            </ul>

        </div>