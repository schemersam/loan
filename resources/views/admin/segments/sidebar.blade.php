
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 px-2 py-0">
            <h1 class="text-2xl font-semibold">Admin Dashboard</h1>
            <ul class="mt-8">
                <li class="my-3">
                    <a href="#" class="flex items-center text-gray-300 hover:text-black">
                       Home Branch 
                    </a>
                </li>
                <li class="my-3">
                    <a href="#" class="flex items-center text-gray-300 hover:text-black">
                        Manage Users
                    </a>
                </li>
                <li class="my-3">
                    <div x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center text-gray-300 hover:text-black">
                            Other Branches
                            <svg x-show="!open" class="ml-auto h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                            <svg x-show="open" class="ml-auto h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                            </svg>
                        </button>
                        <ul x-show="open" class="ml-4 mt-2 space-y-2">
                            <li><a href="#" class="text-gray-300 hover:text-black">Bunda</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-black">Kibara</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-black">Ukerewe</a></li>

                        </ul>
                    </div>
                </li>
                <li class="my-3">
                    <a href="#" class="flex items-center text-gray-300 hover:text-black">
                        Borrowers
                    </a>
                </li>
                <li class="my-3">
                    <li class="my-3">
                        <div x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center text-gray-300 hover:text-black">
                                Loans
                                <svg x-show="!open" class="ml-auto h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                                <svg x-show="open" class="ml-auto h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                                </svg>
                            </button>
                            <ul x-show="open" class="ml-4 mt-2 space-y-2">
                                <li><a href="#" class="text-gray-300 hover:text-black">Loans Awaiting Approvals</a></li>
                                <li><a href="#" class="text-gray-300 hover:text-black">Disbursed Loans</a></li>
                                <li><a href="#" class="text-gray-300 hover:text-black">Total Loans Issued</a></li>
                                <li><a href="#" class="text-gray-300 hover:text-black">Overdue Loans</a></li>
    
    
                            </ul>
                        </div>
                    </li>
                </li>
                <li class="my-3">
                    <a href="#" class="flex items-center text-gray-300 hover:text-black">
                        Repayments
                    </a>
                </li>
                <li class="my-3">
                    <a href="#" class="flex items-center text-gray-300 hover:text-black">
                        Calendar
                    </a>
                </li>
                <li class="my-3">
                    <a href="#" class="flex items-center text-gray-300 hover:text-black">
                        Personal Savings
                    </a>
                </li>
                <li class="my-3">
                    <a href="#" class="flex items-center text-gray-300 hover:text-black">
                        Transactions
                    </a>
                </li>
                <li class="my-3">
                    <a href="#" class="flex items-center text-gray-300 hover:text-black">
                        E signatures
                    </a>
                </li>
                <li class="my-3">
                    <a href="#" class="flex items-center text-gray-300 hover:text-black">
                        Payroll
                    </a>
                </li>
                <li class="my-3">
                    <a href="#" class="flex items-center text-gray-300 hover:text-black">
                        Expenses
                    </a>
                </li>
                <li class="my-3">
                    <a href="#" class="flex items-center text-gray-300 hover:text-black">
                        Income
                    </a>
                </li>
                <li class="my-3">
                    <a href="#" class="flex items-center text-gray-300 hover:text-black">
                        Assets
                    </a>
                </li>
                <li class="my-3">
                    <div x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center text-gray-300 hover:text-black">
                            Reports
                            <svg x-show="!open" class="ml-auto h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                            <svg x-show="open" class="ml-auto h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                            </svg>
                        </button>
                        <ul x-show="open" class="ml-4 mt-2 space-y-2">
                            <li><a href="#" class="text-gray-300 hover:text-black">Daily Report</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-black">Weekly Report</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-black">Monthly Report</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-black">Yearly Report</a></li>


                        </ul>
                    </div>
                </li>
                <li class="my-3">
                    <a href="#" class="flex items-center text-gray-300 hover:text-black">
                        Accounting
                    </a>
                </li>
                <!-- Add more menu items here -->
            </ul>
        </div>

        <!-- Page content -->
        <div class="flex-1 p-10">
            <!-- Page content goes here -->
        </div>
    
