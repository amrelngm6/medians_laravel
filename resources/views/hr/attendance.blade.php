@extends('layout.master')
@section('title', 'HR Attendance')
@section('css')

@endsection
@section('main-content')

            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Attendance table </h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="#">HR</a>
                                </li>
                                <li class="active">
                                    <strong>Attendance</strong>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-12 ">
                </div>

                <div class="col-lg-12 flex gap-10">
                    <div class="w-full">
                        <div class="widget-stat pb-0 card bg-info">
                            <div class="card-body p-0 ">
                                <div class="mt-4 overflow-hidden flex gap-4">
                                    <div class="flex-none flex-end text-white ">
                                        <p class="mb-1">Absence</p>
                                        <h3 class="text-white fs-2hx">14</h3>
                                    </div>
                                    <span class="w-full">
                                        <canvas class="clean-line-chartjs relative" data-fill="true" data-color="white"
                                            data-label="Absence" height="38" width="100%"></canvas>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="widget-stat pb-0 card bg-primary">
                            <div class="card-body p-0 ">
                                <div class="mt-4 overflow-hidden flex gap-4">
                                    <div class="pt-2 flex-none text-white ">
                                        <p class="mb-1">Attendance</p>
                                        <h3 class="text-white mb-0 pb-0 fs-2hx">469</h3>
                                    </div>
                                    <span class="w-full ">
                                        <canvas class="clean-bar-chartjs relative" data-color="white" data-label="Attendance"
                                            height="40" width="100%"></canvas>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full">
                        <div class="widget-stat pb-0 card bg-success">
                            <div class="card-body p-0 ">
                                <div class="mt-4 overflow-hidden flex gap-4">
                                    <div class="pt-2 flex-none text-white ">
                                        <p class="mb-1">Working hours</p>
                                        <h3 class="text-white mb-0 pb-0 fs-2hx">2,698</h3>
                                    </div>
                                    <span class="w-full ">
                                        <canvas class="clean-bar-chartjs relative" data-color="white" data-label="Working hours"
                                            height="40" width="100%"></canvas>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-header pt-7">
                            <h2>Attendance Log</h2>
                            <input type="date" class="datepicker form-control form-control-solid py-1 w-200px" />
                        </div>

                        <div class="card-body">
                            <!--end grid-->
                            <div class="overflow-x-auto">
                                <table class="w-full whitespace-nowrap table table-striped">
                                    <thead
                                        class="ltr:text-left rtl:text-right bg-slate-100 text-slate-500 dark:text-zink-200 dark:bg-zink-600">
                                        <tr
                                            class="*:px-3.5 *:py-2.5 *:font-semibold *:border-b *:border-slate-200 *:dark:border-zink-500">
                                            <th class="min-w-125px">Employee Name</th>
                                            <th>01</th>
                                            <th>02</th>
                                            <th>03</th>
                                            <th>04</th>
                                            <th>05</th>
                                            <th class="active">06</th>
                                            <th>07</th>
                                            <th>08</th>
                                            <th>09</th>
                                            <th>10</th>
                                            <th>11</th>
                                            <th>12</th>
                                            <th>13</th>
                                            <th>14</th>
                                            <th>15</th>
                                            <th>16</th>
                                            <th>17</th>
                                            <th>18</th>
                                            <th>19</th>
                                            <th>20</th>
                                            <th>21</th>
                                            <th>22</th>
                                            <th>23</th>
                                            <th>24</th>
                                            <th>25</th>
                                            <th>26</th>
                                            <th>27</th>
                                            <th>28</th>
                                            <th>29</th>
                                            <th>30</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="*:px-3.5 *:py-2.5 *:border-y *:border-slate-200 *:dark:border-zink-500">
                                            <td><a href="#!" class="transition-all duration-200 ease-linear">Adam Smith</a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="*:px-3.5 *:py-2.5 *:border-y *:border-slate-200 *:dark:border-zink-500">
                                            <td><a href="#!" class="transition-all duration-200 ease-linear">Haidy Johnson</a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                        </tr>
                                        <tr class="*:px-3.5 *:py-2.5 *:border-y *:border-slate-200 *:dark:border-zink-500">
                                            <td><a href="#!" class="transition-all duration-200 ease-linear">Hana Torres</a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="*:px-3.5 *:py-2.5 *:border-y *:border-slate-200 *:dark:border-zink-500">
                                            <td><a href="#!" class="transition-all duration-200 ease-linear">Jose Adam</a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="*:px-3.5 *:py-2.5 *:border-y *:border-slate-200 *:dark:border-zink-500">
                                            <td><a href="#!" class="transition-all duration-200 ease-linear">Juliette Fecteau</a>
                                            </td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="*:px-3.5 *:py-2.5 *:border-y *:border-slate-200 *:dark:border-zink-500">
                                            <td><a href="#!" class="transition-all duration-200 ease-linear">Jonas Frederiksen</a>
                                            </td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="*:px-3.5 *:py-2.5 *:border-y *:border-slate-200 *:dark:border-zink-500">
                                            <td><a href="#!" class="transition-all duration-200 ease-linear">Kim Broberg</a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="*:px-3.5 *:py-2.5 *:border-y *:border-slate-200 *:dark:border-zink-500">
                                            <td><a href="#!" class="transition-all duration-200 ease-linear">Nancy Reynolds</a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="*:px-3.5 *:py-2.5 *:border-y *:border-slate-200 *:dark:border-zink-500">
                                            <td><a href="#!" class="transition-all duration-200 ease-linear">Thomas Hatfield</a>
                                            </td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="*:px-3.5 *:py-2.5 *:border-y *:border-slate-200 *:dark:border-zink-500">
                                            <td><a href="#!" class="transition-all duration-200 ease-linear">Holly Kavanaugh</a>
                                            </td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="x"
                                                    class="lucide lucide-x text-red-500 size-4">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg></td>
                                            <td><a href="#!" data-modal-target="addOrderModal"
                                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check"
                                                        class="lucide lucide-check size-4">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MAIN CONTENT AREA ENDS -->
            </div>
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->



<script src="{{asset('assets/plugins/chartjs-chart/Chart.min.js')}}"></script>
<script src="{{asset('assets/js/chart-chartjs.js')}}"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection