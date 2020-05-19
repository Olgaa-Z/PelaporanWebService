  <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                   <img src="<?php echo base_url();?>asset/img/pdam.jpg" width="220" height="150">
                    <!-- <li><div class="left-bg"></div></li> -->
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>
                      <li class="active ripple">
                      <a href="<?php Echo site_url('pelanggan/get_pelanggan')?>">
                        <span class="fa-home fa"></span> Pelanggan</a>
                    </li>
                    <li class="active ripple">
                      <a href="<?php Echo site_url('golongan/get_golongan')?>">
                        <span class="fa-home fa"></span> Golongan</a>
                    </li>
                     <li class="active ripple">
                      <a href="<?php Echo site_url('sub_golongan/get_sub_golongan')?>">
                        <span class="fa-home fa"></span> Sub Golongan</a>
                    </li>
                     <li class="ripple"><a class="tree-toggle nav-header">
                      <span class="fa-home fa"></span>Transaksi<span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                       <li class="ripple"><a href="<?php echo site_url('Transaksi/input_meter')?>"><span class="fa fa-table"></span>Meter Pelanggan</a></li>
                        <li class="ripple"><a href="<?php echo site_url('Transaksi/bayar')?>"><span class="fa fa-table"></span>Pembayaran</a></li>
                      </ul>
                    </li>
                     <li class="ripple"><a class="tree-toggle nav-header">
                      <span class="fa-home fa"></span>Laporan<span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                       <li class="ripple"><a href="<?php echo site_url('Laporan/Lap_pelanggan')?>"><span class="fa fa-table"></span>Laporan Pelanggan</a></li>
                        <li class="ripple"><a href="<?php echo site_url('Laporan/lap_bulan')?>"><span class="fa fa-table"></span>Laporan Bulanan</a></li>
                        <li class="ripple"><a href="<?php echo site_url('Laporan/lap_bykec')?>"><span class="fa fa-table"></span>Laporan Wilayah</a></li>
                      <!--   <li class="ripple"><a href="<?php echo site_url('Laporan/lap_tagihan')?>"><span class="fa fa-table"></span>Laporan Tagihan</a></li> -->
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li><a href="credits.html">#</a></li>
                  </ul>
                </div>
            </div>
           
           