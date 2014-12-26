 <div class="nav_logo animated fadeInDown delay1">            
                <div class="container">
                    <div class="row-fluid">

                        <!-- Logo-->
                        <div class="span3 logo">
                            <a href="{{ URL::to('/') }}" title="Back to Home">                            
                                <img src="{{ URL::asset('assets/img/index/logo.png')}}" alt="OCK Group Berhad">                            </a>                        </div>
                        <!-- End Logo-->
                                                      
                        <!-- Nav-->
                        <nav class="span9">
                            <!-- Menu-->
                            <ul id="menu" class="sf-menu">
                                <li><a href="{{ URL::to('/') }}">HOME</a>                                </li>
                                <li>
                                	<a href="#">ABOUT US</a>
                                	<ul>                                  
                                        <li><a href="{{ URL::to('/pages/corporate_profile')}}">Corporate Profile</a></li>
                                        <li><a href="{{ URL::to('/pages/vision_mission')}}">Vision &amp; Mission</a></li>
                                        <li><a href="{{ URL::to('/pages/board_of_directors')}}">Board of Directors</a></li>
                                        <li><a href="{{ URL::to('/pages/corporate_structure')}}">Corporate Structure</a></li>
                                        <li><a href="{{ URL::to('/pages/milestone')}}">Milestone</a></li>
                                        <li><a href="{{ URL::to('/pages/achievements')}}">Achievements</a></li>
                                        <li><a href="{{ URL::to('/pages/board_charter')}}">Board Charter</a></li>
                                        <li><a href="{{ URL::to('/pages/news_events') }}">News &amp; Events</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">CORE BUSINESS</a>
                                	<ul>
                                        @foreach ($businesses_create as $Busi)    
                                        <li><a href="{{$Busi->url}}">{{$Busi->title}}</a></li>
                                        @endforeach 
                                        
                                    </ul>
                                </li>
                                <li><a href="{{ URL::to('/pages/our_clients')}}">CLIENTS</a></li>
                                 <li>
                                    <a href="{{ URL::to('/pages/investor_relations_home')}}">INVESTOR RELATIONS</a>
                                    <ul>                                  
                                        <li><a href="#">Corporate Information</a>
                                        	<ul>
                                            	<li><a href="{{ URL::to('/pages/corporate_info_general')}}">General</a></li>
                                                <li><a href="{{ URL::to('/pages/corporate_info_directors_profile')}}">Director's Profile</a></li>
                                                <li><a href="{{ URL::to('/pages/corporate_info_key_mgmt_team')}}">Key Management Team</a></li>
                                                <li><a href="{{ URL::to('/pages/corporate_info_our_properties')}}">Our Properties</a></li>
                                                <li><a href="{{ URL::to('/pages/corporate_info_our_subsidiaries')}}">Our Subsidiaries</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ URL::to('/pages/corporate_governance')}}">Corporate Governance</a></li>
                                        <li><a href="#">IPO Centre</a>
                                        	<ul>
                                            	<li><a href="{{ URL::to('/pages/ipo_centre_ipo_statistics')}}">IPO Statistics</a></li>
                                                <li><a href="{{ URL::to('/pages/ipo_centre_competitive_advantages')}}">Competitive Advantages</a></li>
                                                <li><a href="{{ URL::to('/pages/ipo_centre_risk_factors')}}">Risk Factors</a></li>
                                                <li><a href="{{ URL::to('/pages/ipo_centre_utilisation_proceeds')}}">Utilisation of Proceeds</a></li>
                                                <li><a href="{{ URL::to('/pages/ipo_centre_industry_overview')}}">Industry Overview</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Share Information</a>
                                        	<ul>
                                            	<li><a href="{{ URL::to('/pages/share_information_price_ticker')}}">Price Ticker</a></li>
                                                <li><a href="{{ URL::to('/pages/share_information_stock_charts')}}">Stock Charts</a></li>
                                                <li><a href="{{ URL::to('/pages/share_information_price_volume')}}">Price &amp; Volume</a></li>
                                                <li><a href="{{ URL::to('/pages/share_information_analysis_shareholdings')}}">Analysis of Shareholdings</a></li>
                                                <li><a href="{{ URL::to('/pages/share_information_top_30_shareholders')}}">Top 30 Shareholders</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ URL::to('/pages/entitlements')}}">Entitlements</a></li>
                                        <li><a href="#">Financial Information</a>
                                        	<ul>
                                            	<li><a href="{{ URL::to('/pages/financial_information_financial_highlights')}}">Financial Highlights</a></li>
                                                <li><a href="{{ URL::to('/pages/financial_information_comprehensive_income')}}">Comprehensive Income</a></li>
                                                <li><a href="{{ URL::to('/pages/financial_information_financial_position')}}">Financial Position</a></li>
                                                <li><a href="{{ URL::to('/pages/financial_information_cash_flow_statement')}}">Cash Flow Statement</a></li>
                                                <li><a href="{{ URL::to('/pages/financial_information_changes_in_equity')}}">Statement of Changes In Equity</a></li>
                                                <li><a href="financial_information_latest_quarterly_report.html">Latest Quarterly Report</a></li>
                                                <li><a href="financial_information_segmental_analysis.html">Segmental Analysis</a></li>
                                                <li><a href="financial_information_ratio_analysis.html">Ratio Analysis</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Management Analysis</a>
                                        	<ul>
                                            	<li><a href="management_analysis_chairman_statement.html">Chairman's Statement</a></li>
                                                <li><a href="management_analysis_review_operations.html">Review Of Operations</a></li>
                                                <li><a href="management_analysis_past_performance_review.html">Past Performance Review</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">News Centre</a>
                                        	<ul>
                                            	<li><a href="news_centre_bursa_announcements.html">Bursa Announcements</a></li>
                                                <li><a href="news_centre_latest_media_news.html">Media News</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Reports</a>
                                        	<ul>
                                            	<li><a href="reports_annual_reports.html">Annual Reports</a></li>
                                                <li><a href="reports_annual_audited_accounts.html">Annual Audited Accounts</a></li>
                                                <li><a href="reports_quarterly_reports.html">Quarterly Reports</a></li>
                                                <li><a href="reports_circulars.html">Circulars</a></li>
                                                <li><a href="reports_prospectus.html">Prospectus</a></li>
                                                <li><a href="reports_analyst_reports.html">Analyst Reports</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Investor Tools</a>
                                        	<ul>
                                            	<li><a href="investor_tools_news_alert_subscribe.html">News Alert</a></li>
                                                <li><a href="investor_tools_news_price_gain_loss_calculator.html">Price Gain / Loss Calculator</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="event_calendar.html">Event Calendar</a></li>
                                    </ul>
                                </li> 
                                <li><a href="{{ URL::to('create_vacancy') }}">CAREERS</a></li>                                                    
                          		<li><a href="#">CONTACT US</a>
                                	<ul>
                                       <li><a href="contact_us.html">Contact Us</a></li>
                                       <li><a href="contact_us.html#enquiry">Enquiry</a></li>
                                       <li><a href="regional_offices.html">Regional Offices</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- End Menu-->
                        </nav>
                        <!-- End Nav-->
                    </div>
                </div>
          </div>