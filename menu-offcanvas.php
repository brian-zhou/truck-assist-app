<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo ' 
    <!-- ======== OFFCANVAS MENU ========= -->
        <div class="offcanvas-menu offcanvas-effect visible-xs">
          <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
          <h3>Mobile Menu</h3>
            <div>
              <div>
                <ul>
                    <li><a href="login-home.php">HOME</a>
                        <ul>
                            <li class="active"><a href="logout.php"><i class="fa fa-home"></i>Logout</a></li>
                        </ul>
                    </li>

                    <li><a href="#">QUALITY CONTROL</a>
                        <ul>
                            <li><a href=""><i class="fa fa-life-ring"></i> QC Details</a></li>
                            <li><a href=""><i class="fa fa-life-ring"></i> Device Repairs</a></li>
                            <li><a href=""><i class="fa fa-life-ring"></i> MDVR Device Repair</a></li>
                            <li><a href=""><i class="fa fa-life-ring"></i> Bulk SMS</a></li>
                        </ul>
                    </li>

                    <li><a href="#">IT SUPPORT</a>
                        <ul>
                            <li><a href=""><i class="fa fa-pencil-square-o"></i> Server Maintenance</a></li>
                            <li><a href=""><i class="fa fa-pencil-square-o"></i> Database Maintenance</a></li>
                        </ul>
                    </li>

                    <li><a href="#">OPERATIONS</a>
                        <ul>
                            <li><a href="faults-log-ajax-search.php"><i class="fa fa-paper-plane-o"></i> Faults Log</a></li>
                            <li><a href=""><i class="fa fa-paper-plane-o"></i> Technicians Job Card</a></li>
                            <li><a href=""><i class="fa fa-paper-plane-o"></i> Driver Tamper</a></li>
                        </ul>
                    </li>

                    <li><a href="#">LOGISTICS</a>
                        <ul>
                            <li><a href=""><i class="fa fa-briefcase"></i> Stock Control</a></li>
                        </ul>
                    </li>
                  
                  <li><a href="contact.php">FAQ</a>
                        <ul>
                            <li><a href="faq.html"><i class="fa fa-question-circle"></i> FAQ Page</a></li>
                        </ul>
                    </li>


                    <li><a href="contact.php">FEEDBACK</a>
                        <ul>
                            <li><a href="contact.php"><i class="fa fa-envelope-o"></i> Send Message</a></li>
                        </ul>
                    </li>
                </ul>
              </div>
            </div>
        </div>
    <!-- .offcanvas-menu -->';