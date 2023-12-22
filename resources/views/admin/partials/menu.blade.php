<div class="nano">
    <div class="nano-content">
        <nav id="menu" class="nav-main" role="navigation">
            <ul class="nav nav-main">
                <li class="{{ Request::url() == route('admin.index') ? 'nav-expanded nav-active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.index') }}">
                        <i class="bx bx-home-alt" aria-hidden="true"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="{{ Request::url() == route('admin.user.index') ? 'nav-expanded nav-active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.user.index') }}">
                        <i class="bx bx-home-alt" aria-hidden="true"></i>
                        <span>User List</span>
                    </a>
                </li>
                <li class="{{ Request::url() == route('admin.balance.index') ? 'nav-expanded nav-active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.balance.index') }}">
                        <i class="bx bx-home-alt" aria-hidden="true"></i>
                        <span>Balance History</span>
                    </a>
                </li>


                <li class="{{ Request::url() == route('admin.feature.index') ? 'nav-expanded nav-active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.feature.index') }}">
                        <i class="bx bx-home-alt" aria-hidden="true"></i>
                        <span>Feature Ariea</span>
                    </a>
                </li>




                <li class="{{ Request::url() == route('admin.cryptoWallets') ? 'nav-expanded nav-active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.cryptoWallets') }}">
                        <i class="bx bx-home-alt" aria-hidden="true"></i>
                        <span>Crypto Wallets</span>
                    </a>
                </li>



                <li class="nav-parent {{ Request::url() == route('partner.create') || Request::url() == route('partner.index') ? 'nav-expanded nav-active' : '' }}">
                    <a class="nav-link" href="#">
                        <i class="bx bx-layout" aria-hidden="true"></i>
                        <span>Partner</span>
                    </a>
                    <ul class="nav nav-children">
                        <li class="{{ Request::url() == route('partner.create') ? 'nav-active' : '' }}">
                            <a class="nav-link" href="{{ route('partner.create') }}">
                                Add Partner
                            </a>
                        </li>
                        <li class="{{ Request::url() == route('partner.index') ? 'nav-active' : '' }}">
                            <a class="nav-link" href="{{ route('partner.index') }}">
                                All Partner
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-parent {{ Request::url() == route('admin.privacyPolicy') || Request::url() == route('admin.termsCondition') || Request::url() == route('admin.whitePaper') ? 'nav-expanded nav-active' : '' }}">
                    <a class="nav-link" href="#">
                        <i class="bx bx-layout" aria-hidden="true"></i>
                        <span>Pages</span>
                    </a>
                    <ul class="nav nav-children">
                        <li class="{{ Request::url() == route('admin.privacyPolicy') ? 'nav-active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.privacyPolicy') }}">
                                Privacy Policy
                            </a>
                        </li>
                        <li class="{{ Request::url() == route('admin.termsCondition') ? 'nav-active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.termsCondition') }}">
                                Terms And Condition
                            </a>
                        </li>
                        <li class="{{ Request::url() == route('admin.whitePaper') ? 'nav-active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.whitePaper') }}">
                                White Paper
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="{{ Request::url() == route('admin.partner-data.index') ? 'nav-expanded nav-active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.partner-data.index') }}">
                        <i class="bx bx-home-alt" aria-hidden="true"></i>
                        <span>Partner Data</span>
                    </a>
                </li>
                <li class="nav-parent {{ Request::url() == route('team.create') || Request::url() == route('team.index') ? 'nav-expanded nav-active' : '' }}">
                    <a class="nav-link" href="#">
                        <i class="bx bx-layout" aria-hidden="true"></i>
                        <span>Team Member</span>
                    </a>
                    <ul class="nav nav-children">
                        <li class="{{ Request::url() == route('team.create') ? 'nav-active' : '' }}">
                            <a class="nav-link" href="{{ route('team.create') }}">
                                Add Team Member
                            </a>
                        </li>
                        <li class="{{ Request::url() == route('team.index') ? 'nav-active' : '' }}">
                            <a class="nav-link" href="{{ route('team.index') }}">
                                All Team Member
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-parent {{ Request::url() == route('admin.presale.index') || Request::url() == route('presale-raise.create') || Request::url() == route('presale-raise.index') ? 'nav-expanded nav-active' : '' }}">
                    <a class="nav-link" href="#">
                        <i class="bx bx-layout" aria-hidden="true"></i>
                        <span>Presale</span>
                    </a>
                    <ul class="nav nav-children">
                        <li class="{{ Request::url() == route('admin.presale.index') ? 'nav-active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.presale.index') }}">
                                Presale
                            </a>
                        </li>
                        <li class="{{ Request::url() == route('presale-raise.create') ? 'nav-active' : '' }}">
                            <a class="nav-link" href="{{ route('presale-raise.create') }}">
                                Add Presale Raise
                            </a>
                        </li>
                        <li class="{{ Request::url() == route('presale-raise.index') ? 'nav-active' : '' }}">
                            <a class="nav-link" href="{{ route('presale-raise.index') }}">
                                All Presale Raise
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-parent {{ Request::url() == route('counter.index') || Request::url() == route('counter.create') || Request::url() == route('admin.counter.takeSalecount') ? 'nav-expanded nav-active' : '' }}">
                    <a class="nav-link" href="#">
                        <i class="bx bx-layout" aria-hidden="true"></i>
                        <span>Counter</span>
                    </a>
                    <ul class="nav nav-children">
                        <li class="{{ Request::url() == route('admin.counter.takeSalecount') ? 'nav-active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.counter.takeSalecount') }}">
                                Count Down
                            </a>
                        </li>
                        <li class="{{ Request::url() == route('counter.index') ? 'nav-active' : '' }}">
                            <a class="nav-link" href="{{ route('counter.index') }}">
                                List Counter
                            </a>
                        </li>
                        <li class="{{ Request::url() == route('counter.create') ? 'nav-active' : '' }}">
                            <a class="nav-link" href="{{ route('counter.create') }}">
                                Add Counter
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-parent {{ Request::url() == route('admin.roadmap.index') || Request::url() == route('roadmap-data.index') || Request::url() == route('roadmap-data.create') ? 'nav-expanded nav-active' : '' }}">
                    <a class="nav-link" href="#">
                        <i class="bx bx-layout" aria-hidden="true"></i>
                        <span>Roadmap</span>
                    </a>
                    <ul class="nav nav-children">
                        <li class="{{ Request::url() == route('admin.roadmap.index') ? 'nav-active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.roadmap.index') }}">
                                Roadmap
                            </a>
                        </li>
                        <li class="{{ Request::url() == route('roadmap-data.index') ? 'nav-active' : '' }}">
                            <a class="nav-link" href="{{ route('roadmap-data.index') }}">
                                Roadmap Data List
                            </a>
                        </li>
                        <li class="{{ Request::url() == route('roadmap-data.create') ? 'nav-active' : '' }}">
                            <a class="nav-link" href="{{ route('roadmap-data.create') }}">
                                Roadmap Data Create
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-parent {{ Request::url() == route('admin.ecosystem.index') || Request::url() == route('ecosystem-data.create') || Request::url() == route('ecosystem-data.index') ? 'nav-expanded nav-active' : '' }}">
                    <a class="nav-link" href="#">
                        <i class="bx bx-layout" aria-hidden="true"></i>
                        <span>Ecosystem</span>
                    </a>
                    <ul class="nav nav-children">
                        <li class="{{ Request::url() == route('admin.ecosystem.index') ? 'nav-active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.ecosystem.index') }}">
                                Ecosystem
                            </a>
                        </li>
                        <li class="{{ Request::url() == route('ecosystem-data.create') ? 'nav-active' : '' }}">
                            <a class="nav-link" href="{{ route('ecosystem-data.create') }}">
                                Add Echosystem Data
                            </a>
                        </li>
                        <li class="{{ Request::url() == route('ecosystem-data.index') ? 'nav-active' : '' }}">
                            <a class="nav-link" href="{{ route('ecosystem-data.index') }}">
                                All Echosystem Data
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-parent {{ Request::url() == route('faq.create') || Request::url() == route('faq.index') ? 'nav-expanded nav-active' : '' }}">
                    <a class="nav-link" href="#">
                        <i class="bx bx-layout" aria-hidden="true"></i>
                        <span>FAQ</span>
                    </a>
                    <ul class="nav nav-children">
                        <li class="{{ Request::url() == route('faq.create') ? 'nav-active' : '' }}">
                            <a class="nav-link" href="{{ route('faq.create') }}">
                                Add FAQ
                            </a>
                        </li>
                        <li class="{{ Request::url() == route('faq.index') ? 'nav-active' : '' }}">
                            <a class="nav-link" href="{{ route('faq.index') }}">
                                All FAQ
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="{{ Request::url() == route('admin.coinBuySell') ? 'nav-expanded nav-active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.coinBuySell') }}">
                        <i class="bx bx-home-alt" aria-hidden="true"></i>
                        <span>Coin Buy Sell Price</span>
                    </a>
                </li>




                <li class="nav-parent {{ Request::url() == route('wallet.index') || Request::url() == route('wallet.create') || Request::url() == route('admin.balance.remove') ? 'nav-expanded nav-active' : '' }}">
                    <a class="nav-link" href="#">
                        <i class="bx bx-layout" aria-hidden="true"></i>
                        <span>Wallet</span>
                    </a>
                    <ul class="nav nav-children">
                        <li class="{{ Request::url() == route('wallet.index') ? 'nav-active' : '' }}">
                            <a class="nav-link" href="{{ route('wallet.index') }}">
                                List Wallet
                            </a>
                        </li>
                        <li class="{{ Request::url() == route('wallet.create') ? 'nav-active' : '' }}">
                            <a class="nav-link" href="{{ route('wallet.create') }}">
                                Add Wallet
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="{{ Request::url() == route('admin.buyCoin.index') ? 'nav-expanded nav-active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.buyCoin.index') }}">
                        <i class="bx bx-home-alt" aria-hidden="true"></i>
                        <span>Coin Buy List</span>
                    </a>
                </li>


                <li class="nav-parent {{ Request::url() == route('admin.coinSell.pending') || Request::url() == route('admin.coinSell.success') || Request::url() == route('admin.coinSell.failed') ? 'nav-expanded nav-active' : '' }}">
                    <a class="nav-link" href="#">
                        <i class="bx bx-layout" aria-hidden="true"></i>
                        <span>Request for Sell Coin</span>
                    </a>
                    <ul class="nav nav-children">
                        <li class="{{ Request::url() == route('admin.coinSell.pending') ? 'nav-active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.coinSell.pending') }}">
                                Pending Request
                            </a>
                        </li>
                        <li class="{{ Request::url() == route('admin.coinSell.success') ? 'nav-active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.coinSell.success') }}">
                                Success Request
                            </a>
                        </li>
                        <li class="{{ Request::url() == route('admin.coinSell.failed') ? 'nav-active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.coinSell.failed') }}">
                                Failed Request
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="{{ Request::url() == route('admin.blockchain.index') ? 'nav-expanded nav-active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.blockchain.index') }}">
                        <i class="bx bx-home-alt" aria-hidden="true"></i>
                        <span>Blockchain</span>
                    </a>
                </li>

                <li class="{{ Request::url() == route('admin.about.index') ? 'nav-expanded nav-active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.about.index') }}">
                        <i class="bx bx-home-alt" aria-hidden="true"></i>
                        <span>About</span>
                    </a>
                </li>

                {{-- <li class="{{ Request::url() == route('admin.presale.index') ? 'nav-expanded nav-active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.presale.index') }}">
                        <i class="bx bx-home-alt" aria-hidden="true"></i>
                        <span>PreSale</span>
                    </a>
                </li> --}}


            </ul>
        </nav>
    </div>

    <script>
        // Maintain Scroll Position
        if (typeof localStorage !== 'undefined') {
            if (localStorage.getItem('sidebar-left-position') !== null) {
                var initialPosition = localStorage.getItem('sidebar-left-position'),
                sidebarLeft = document.querySelector('#sidebar-left .nano-content');
                sidebarLeft.scrollTop = initialPosition;
            }
        }
    </script>
</div>
