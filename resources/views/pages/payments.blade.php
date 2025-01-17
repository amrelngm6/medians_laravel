@extends('layout.master')
@section('title', 'Payments')
@section('css')

@endsection
@section('main-content')
            <div class="wrapper main-wrapper row" style="">

                <div class="col-xs-12">
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Payments List</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="">Pages</a>
                                </li>
                                <li class="active">
                                    <strong>Payments</strong>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- STATS AREA STARTS -->

                <div class="col-xs-12 col-md-6 col-lg-4">

                    <div class="card mb-5">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-light text-primary rounded-circle fs-3 material-shadow">
                                        <i class='bx bxs-pie-chart-alt fs-2tx'></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Paid Amount</p>
                                    <h4 class=" mb-0"><span class="counter-value" data-target="2390.68">$142,793</span>
                                    </h4>
                                </div>
                                <div class="flex-shrink-0 align-self-end">
                                    <span class="badge bg-success text-success"><i
                                            class="bx bxs-down-arrow-alt align-middle me-1"></i>4.67 %<span>
                                        </span></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xs-12 col-md-6 col-lg-4">

                    <div class="card ">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-light text-primary rounded-circle fs-3 material-shadow">
                                        <i class='bx bx-line-chart-down fs-2tx'></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Net Profit</p>
                                    <h4 class=" mb-0"><span class="counter-value" data-target="2390.68">$61,428</span>
                                    </h4>
                                </div>
                                <div class="flex-shrink-0 align-self-end">
                                    <span class="badge bg-danger text-danger"><i
                                            class="bx bxs-down-arrow-alt align-middle me-1"></i>1.24 %<span>
                                        </span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-lg-4">


                    <div class="card mb-5">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-light text-primary rounded-circle fs-3 material-shadow">
                                        <i class='bx bx-analyse fs-2tx'></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Transactions</p>
                                    <h4 class=" mb-0"><span class="counter-value" data-target="2390.68">1,457</span>
                                    </h4>
                                </div>
                                <div class="flex-shrink-0 align-self-end">
                                    <span class="badge bg-success text-success"><i
                                            class="bx bxs-up-arrow-alt align-middle me-1"></i>1.24 %<span>
                                        </span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- STATS AREA END -->

                <div class="clearfix"></div>

                <!-- MAIN CONTENT AREA STARTS -->
                <div class="col-xs-12 ">
                    <section class="card ">
                        <div class="card-header">
                            <div class="card-title">
                                <h2 class=""> Payments</h2>
                            </div>
                            <div class="flex flex-center">
                                <a class="btn btn-md btn-primary  open-modal" data-modal="#add-payment-modal" href="javascript:;">
                                    New Payment </a>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="w-full">

                                <!-- ********************************************** -->

                                <table id="example" class=" text-start display datatable table table-hover table-condensed">
                                    <thead>
                                        <tr>
                                            <th class="text-start">Bill No</th>
                                            <th class="text-start">Bill Date</th>
                                            <th class="text-start">Customer</th>
                                            <th class="text-start">Agency</th>
                                            <th class="text-start">Charges</th>
                                            <th class="text-start">Tax</th>
                                            <th class="text-start">Discount</th>
                                            <th class="text-start">Total</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>11/19/2018</td>
                                            <td>Virginia Rose</td>
                                            <td>Lawrence Harris</td>
                                            <td>721</td>
                                            <td>72</td>
                                            <td>36</td>
                                            <td>757</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>11/20/2018</td>
                                            <td>Julie Lynch</td>
                                            <td>Nicole Robinson</td>
                                            <td>740</td>
                                            <td>74</td>
                                            <td>37</td>
                                            <td>777</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>11/24/2018</td>
                                            <td>Jacqueline Woods</td>
                                            <td>Cheryl Wells</td>
                                            <td>513</td>
                                            <td>51</td>
                                            <td>25</td>
                                            <td>539</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>11/25/2018</td>
                                            <td>Jonathan Lewis</td>
                                            <td>Terry Stevens</td>
                                            <td>871</td>
                                            <td>87</td>
                                            <td>43</td>
                                            <td>915</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>11/22/2018</td>
                                            <td>Benjamin Flores</td>
                                            <td>Chris Hernandez</td>
                                            <td>636</td>
                                            <td>63</td>
                                            <td>31</td>
                                            <td>668</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>11/22/2018</td>
                                            <td>Lori Perkins</td>
                                            <td>Annie Cooper</td>
                                            <td>637</td>
                                            <td>63</td>
                                            <td>31</td>
                                            <td>669</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>11/25/2018</td>
                                            <td>Margaret Griffin</td>
                                            <td>Jessica Patterson</td>
                                            <td>742</td>
                                            <td>74</td>
                                            <td>37</td>
                                            <td>779</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>11/26/2018</td>
                                            <td>Adam Wheeler</td>
                                            <td>Eugene Nichols</td>
                                            <td>998</td>
                                            <td>99</td>
                                            <td>49</td>
                                            <td>1048</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>11/22/2018</td>
                                            <td>Joseph Hunter</td>
                                            <td>Tammy Gordon</td>
                                            <td>390</td>
                                            <td>39</td>
                                            <td>19</td>
                                            <td>410</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>11/26/2018</td>
                                            <td>Fred Taylor</td>
                                            <td>Kelly Mccoy</td>
                                            <td>343</td>
                                            <td>34</td>
                                            <td>17</td>
                                            <td>360</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>11/19/2018</td>
                                            <td>Roger Burke</td>
                                            <td>Phillip Roberts</td>
                                            <td>293</td>
                                            <td>29</td>
                                            <td>14</td>
                                            <td>308</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>11/23/2018</td>
                                            <td>Victor Montgomery</td>
                                            <td>Kimberly Alexander</td>
                                            <td>334</td>
                                            <td>33</td>
                                            <td>16</td>
                                            <td>351</td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>11/23/2018</td>
                                            <td>Keith Henry</td>
                                            <td>Pamela Green</td>
                                            <td>679</td>
                                            <td>67</td>
                                            <td>33</td>
                                            <td>713</td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td>11/23/2018</td>
                                            <td>Betty Willis</td>
                                            <td>Virginia Collins</td>
                                            <td>716</td>
                                            <td>71</td>
                                            <td>35</td>
                                            <td>752</td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td>11/22/2018</td>
                                            <td>Jack Spencer</td>
                                            <td>Joseph Carr</td>
                                            <td>213</td>
                                            <td>21</td>
                                            <td>10</td>
                                            <td>224</td>
                                        </tr>
                                        <tr>
                                            <td>16</td>
                                            <td>11/20/2018</td>
                                            <td>Gloria Kim</td>
                                            <td>Heather Collins</td>
                                            <td>831</td>
                                            <td>83</td>
                                            <td>41</td>
                                            <td>873</td>
                                        </tr>
                                        <tr>
                                            <td>17</td>
                                            <td>11/20/2018</td>
                                            <td>Fred Cunningham</td>
                                            <td>Ryan Kennedy</td>
                                            <td>404</td>
                                            <td>40</td>
                                            <td>20</td>
                                            <td>424</td>
                                        </tr>
                                        <tr>
                                            <td>18</td>
                                            <td>11/21/2018</td>
                                            <td>Mildred Harper</td>
                                            <td>Lisa Crawford</td>
                                            <td>116</td>
                                            <td>11</td>
                                            <td>5</td>
                                            <td>122</td>
                                        </tr>
                                        <tr>
                                            <td>19</td>
                                            <td>11/26/2018</td>
                                            <td>Deborah Robinson</td>
                                            <td>Phyllis Lawrence</td>
                                            <td>247</td>
                                            <td>24</td>
                                            <td>12</td>
                                            <td>259</td>
                                        </tr>
                                        <tr>
                                            <td>20</td>
                                            <td>11/20/2018</td>
                                            <td>Eugene Graham</td>
                                            <td>Christine Ellis</td>
                                            <td>259</td>
                                            <td>25</td>
                                            <td>12</td>
                                            <td>272</td>
                                        </tr>
                                        <tr>
                                            <td>21</td>
                                            <td>11/26/2018</td>
                                            <td>Raymond Bradley</td>
                                            <td>Marie Boyd</td>
                                            <td>274</td>
                                            <td>27</td>
                                            <td>13</td>
                                            <td>288</td>
                                        </tr>
                                        <tr>
                                            <td>22</td>
                                            <td>11/23/2018</td>
                                            <td>Jessica Mendoza</td>
                                            <td>Wayne Lawson</td>
                                            <td>466</td>
                                            <td>46</td>
                                            <td>23</td>
                                            <td>489</td>
                                        </tr>
                                        <tr>
                                            <td>23</td>
                                            <td>11/22/2018</td>
                                            <td>Kimberly Cook</td>
                                            <td>Christina Peterson</td>
                                            <td>459</td>
                                            <td>45</td>
                                            <td>22</td>
                                            <td>482</td>
                                        </tr>
                                        <tr>
                                            <td>24</td>
                                            <td>11/21/2018</td>
                                            <td>Amanda Johnson</td>
                                            <td>Edward Hawkins</td>
                                            <td>236</td>
                                            <td>23</td>
                                            <td>11</td>
                                            <td>248</td>
                                        </tr>
                                        <tr>
                                            <td>25</td>
                                            <td>11/21/2018</td>
                                            <td>Linda Hudson</td>
                                            <td>Gregory Moore</td>
                                            <td>766</td>
                                            <td>76</td>
                                            <td>38</td>
                                            <td>804</td>
                                        </tr>
                                        <tr>
                                            <td>26</td>
                                            <td>11/24/2018</td>
                                            <td>Justin Matthews</td>
                                            <td>Joan Roberts</td>
                                            <td>628</td>
                                            <td>62</td>
                                            <td>31</td>
                                            <td>659</td>
                                        </tr>
                                        <tr>
                                            <td>27</td>
                                            <td>11/19/2018</td>
                                            <td>Christine Webb</td>
                                            <td>Edward Peterson</td>
                                            <td>260</td>
                                            <td>26</td>
                                            <td>13</td>
                                            <td>273</td>
                                        </tr>
                                        <tr>
                                            <td>28</td>
                                            <td>11/19/2018</td>
                                            <td>Billy Torres</td>
                                            <td>Marilyn Carpenter</td>
                                            <td>250</td>
                                            <td>25</td>
                                            <td>12</td>
                                            <td>263</td>
                                        </tr>
                                        <tr>
                                            <td>29</td>
                                            <td>11/22/2018</td>
                                            <td>Peter Boyd</td>
                                            <td>Janice Garza</td>
                                            <td>231</td>
                                            <td>23</td>
                                            <td>11</td>
                                            <td>243</td>
                                        </tr>
                                        <tr>
                                            <td>30</td>
                                            <td>11/22/2018</td>
                                            <td>Joyce Fields</td>
                                            <td>Nicholas Davis</td>
                                            <td>449</td>
                                            <td>44</td>
                                            <td>22</td>
                                            <td>471</td>
                                        </tr>
                                        <tr>
                                            <td>31</td>
                                            <td>11/20/2018</td>
                                            <td>Bonnie Howard</td>
                                            <td>Louise Hamilton</td>
                                            <td>691</td>
                                            <td>69</td>
                                            <td>34</td>
                                            <td>726</td>
                                        </tr>
                                        <tr>
                                            <td>32</td>
                                            <td>11/22/2018</td>
                                            <td>Harold Stevens</td>
                                            <td>Diane Nichols</td>
                                            <td>863</td>
                                            <td>86</td>
                                            <td>43</td>
                                            <td>906</td>
                                        </tr>
                                        <tr>
                                            <td>33</td>
                                            <td>11/24/2018</td>
                                            <td>Timothy Ramirez</td>
                                            <td>Kathryn Wheeler</td>
                                            <td>778</td>
                                            <td>77</td>
                                            <td>38</td>
                                            <td>817</td>
                                        </tr>
                                        <tr>
                                            <td>34</td>
                                            <td>11/24/2018</td>
                                            <td>Sara Barnes</td>
                                            <td>Kenneth Baker</td>
                                            <td>183</td>
                                            <td>18</td>
                                            <td>9</td>
                                            <td>192</td>
                                        </tr>
                                        <tr>
                                            <td>35</td>
                                            <td>11/20/2018</td>
                                            <td>Harold Wells</td>
                                            <td>Sarah Thomas</td>
                                            <td>818</td>
                                            <td>81</td>
                                            <td>40</td>
                                            <td>859</td>
                                        </tr>
                                        <tr>
                                            <td>36</td>
                                            <td>11/21/2018</td>
                                            <td>Jimmy Holmes</td>
                                            <td>James Bishop</td>
                                            <td>401</td>
                                            <td>40</td>
                                            <td>20</td>
                                            <td>421</td>
                                        </tr>
                                        <tr>
                                            <td>37</td>
                                            <td>11/22/2018</td>
                                            <td>Willie Martin</td>
                                            <td>Alan Mccoy</td>
                                            <td>845</td>
                                            <td>84</td>
                                            <td>42</td>
                                            <td>887</td>
                                        </tr>
                                        <tr>
                                            <td>38</td>
                                            <td>11/21/2018</td>
                                            <td>Antonio Knight</td>
                                            <td>Carlos Riley</td>
                                            <td>413</td>
                                            <td>41</td>
                                            <td>20</td>
                                            <td>434</td>
                                        </tr>
                                        <tr>
                                            <td>39</td>
                                            <td>11/21/2018</td>
                                            <td>Doris Medina</td>
                                            <td>Annie Sims</td>
                                            <td>797</td>
                                            <td>79</td>
                                            <td>39</td>
                                            <td>837</td>
                                        </tr>
                                        <tr>
                                            <td>40</td>
                                            <td>11/26/2018</td>
                                            <td>Ashley Gray</td>
                                            <td>Shawn Armstrong</td>
                                            <td>387</td>
                                            <td>38</td>
                                            <td>19</td>
                                            <td>406</td>
                                        </tr>
                                        <tr>
                                            <td>41</td>
                                            <td>11/26/2018</td>
                                            <td>Earl Mason</td>
                                            <td>Elizabeth James</td>
                                            <td>507</td>
                                            <td>50</td>
                                            <td>25</td>
                                            <td>532</td>
                                        </tr>
                                        <tr>
                                            <td>42</td>
                                            <td>11/20/2018</td>
                                            <td>Adam Andrews</td>
                                            <td>Mildred Spencer</td>
                                            <td>234</td>
                                            <td>23</td>
                                            <td>11</td>
                                            <td>246</td>
                                        </tr>
                                        <tr>
                                            <td>43</td>
                                            <td>11/23/2018</td>
                                            <td>Randy Cox</td>
                                            <td>Marilyn Ellis</td>
                                            <td>864</td>
                                            <td>86</td>
                                            <td>43</td>
                                            <td>907</td>
                                        </tr>
                                        <tr>
                                            <td>44</td>
                                            <td>11/22/2018</td>
                                            <td>Sandra Hudson</td>
                                            <td>Justin Adams</td>
                                            <td>457</td>
                                            <td>45</td>
                                            <td>22</td>
                                            <td>480</td>
                                        </tr>
                                        <tr>
                                            <td>45</td>
                                            <td>11/25/2018</td>
                                            <td>Andrea Diaz</td>
                                            <td>Raymond Lawson</td>
                                            <td>864</td>
                                            <td>86</td>
                                            <td>43</td>
                                            <td>907</td>
                                        </tr>
                                        <tr>
                                            <td>46</td>
                                            <td>11/23/2018</td>
                                            <td>Diana Ray</td>
                                            <td>Roy Rose</td>
                                            <td>512</td>
                                            <td>51</td>
                                            <td>25</td>
                                            <td>538</td>
                                        </tr>
                                        <tr>
                                            <td>47</td>
                                            <td>11/20/2018</td>
                                            <td>Craig Howell</td>
                                            <td>Barbara Martinez</td>
                                            <td>909</td>
                                            <td>90</td>
                                            <td>45</td>
                                            <td>954</td>
                                        </tr>
                                        <tr>
                                            <td>48</td>
                                            <td>11/21/2018</td>
                                            <td>Nicholas Hunt</td>
                                            <td>Louise Henderson</td>
                                            <td>496</td>
                                            <td>49</td>
                                            <td>24</td>
                                            <td>521</td>
                                        </tr>
                                        <tr>
                                            <td>49</td>
                                            <td>11/21/2018</td>
                                            <td>Steve Simpson</td>
                                            <td>Jonathan Brooks</td>
                                            <td>240</td>
                                            <td>24</td>
                                            <td>12</td>
                                            <td>252</td>
                                        </tr>
                                        <tr>
                                            <td>50</td>
                                            <td>11/25/2018</td>
                                            <td>Elizabeth Martinez</td>
                                            <td>Betty Lynch</td>
                                            <td>412</td>
                                            <td>41</td>
                                            <td>20</td>
                                            <td>433</td>
                                        </tr>
                                        <tr>
                                            <td>51</td>
                                            <td>11/20/2018</td>
                                            <td>Pamela Harvey</td>
                                            <td>Denise Washington</td>
                                            <td>739</td>
                                            <td>73</td>
                                            <td>36</td>
                                            <td>776</td>
                                        </tr>
                                        <tr>
                                            <td>52</td>
                                            <td>11/26/2018</td>
                                            <td>Sharon Carpenter</td>
                                            <td>Joshua Clark</td>
                                            <td>392</td>
                                            <td>39</td>
                                            <td>19</td>
                                            <td>412</td>
                                        </tr>
                                        <tr>
                                            <td>53</td>
                                            <td>11/21/2018</td>
                                            <td>Wayne Lane</td>
                                            <td>Juan Hernandez</td>
                                            <td>653</td>
                                            <td>65</td>
                                            <td>32</td>
                                            <td>686</td>
                                        </tr>
                                        <tr>
                                            <td>54</td>
                                            <td>11/22/2018</td>
                                            <td>Bonnie George</td>
                                            <td>Kathleen Sanchez</td>
                                            <td>250</td>
                                            <td>25</td>
                                            <td>12</td>
                                            <td>263</td>
                                        </tr>
                                        <tr>
                                            <td>55</td>
                                            <td>11/19/2018</td>
                                            <td>Jessica Taylor</td>
                                            <td>Jimmy Montgomery</td>
                                            <td>952</td>
                                            <td>95</td>
                                            <td>47</td>
                                            <td>1000</td>
                                        </tr>
                                        <tr>
                                            <td>56</td>
                                            <td>11/24/2018</td>
                                            <td>Deborah Mitchell</td>
                                            <td>James Montgomery</td>
                                            <td>979</td>
                                            <td>97</td>
                                            <td>48</td>
                                            <td>1028</td>
                                        </tr>
                                        <tr>
                                            <td>57</td>
                                            <td>11/22/2018</td>
                                            <td>Roger Coleman</td>
                                            <td>Christine Perkins</td>
                                            <td>820</td>
                                            <td>82</td>
                                            <td>41</td>
                                            <td>861</td>
                                        </tr>
                                        <tr>
                                            <td>58</td>
                                            <td>11/20/2018</td>
                                            <td>Fred Jones</td>
                                            <td>Nicole Lee</td>
                                            <td>683</td>
                                            <td>68</td>
                                            <td>34</td>
                                            <td>717</td>
                                        </tr>
                                        <tr>
                                            <td>59</td>
                                            <td>11/21/2018</td>
                                            <td>Willie Collins</td>
                                            <td>John Willis</td>
                                            <td>341</td>
                                            <td>34</td>
                                            <td>17</td>
                                            <td>358</td>
                                        </tr>
                                        <tr>
                                            <td>60</td>
                                            <td>11/19/2018</td>
                                            <td>Karen Dean</td>
                                            <td>Judy Edwards</td>
                                            <td>843</td>
                                            <td>84</td>
                                            <td>42</td>
                                            <td>885</td>
                                        </tr>
                                        <tr>
                                            <td>61</td>
                                            <td>11/26/2018</td>
                                            <td>Frank Porter</td>
                                            <td>Jimmy Stanley</td>
                                            <td>793</td>
                                            <td>79</td>
                                            <td>39</td>
                                            <td>833</td>
                                        </tr>
                                        <tr>
                                            <td>62</td>
                                            <td>11/25/2018</td>
                                            <td>Rachel Crawford</td>
                                            <td>Lisa Ryan</td>
                                            <td>137</td>
                                            <td>13</td>
                                            <td>6</td>
                                            <td>144</td>
                                        </tr>
                                        <tr>
                                            <td>63</td>
                                            <td>11/23/2018</td>
                                            <td>Betty Palmer</td>
                                            <td>Lois Myers</td>
                                            <td>285</td>
                                            <td>28</td>
                                            <td>14</td>
                                            <td>299</td>
                                        </tr>
                                        <tr>
                                            <td>64</td>
                                            <td>11/19/2018</td>
                                            <td>Lisa Gutierrez</td>
                                            <td>Carl Ramirez</td>
                                            <td>133</td>
                                            <td>13</td>
                                            <td>6</td>
                                            <td>140</td>
                                        </tr>
                                        <tr>
                                            <td>65</td>
                                            <td>11/23/2018</td>
                                            <td>Lori Austin</td>
                                            <td>Lawrence Fuller</td>
                                            <td>871</td>
                                            <td>87</td>
                                            <td>43</td>
                                            <td>915</td>
                                        </tr>
                                        <tr>
                                            <td>66</td>
                                            <td>11/22/2018</td>
                                            <td>Brandon Fields</td>
                                            <td>Martin Coleman</td>
                                            <td>834</td>
                                            <td>83</td>
                                            <td>41</td>
                                            <td>876</td>
                                        </tr>
                                        <tr>
                                            <td>67</td>
                                            <td>11/24/2018</td>
                                            <td>Thomas Sullivan</td>
                                            <td>Alice Bennett</td>
                                            <td>545</td>
                                            <td>54</td>
                                            <td>27</td>
                                            <td>572</td>
                                        </tr>
                                        <tr>
                                            <td>68</td>
                                            <td>11/19/2018</td>
                                            <td>Ralph Hanson</td>
                                            <td>Ronald Allen</td>
                                            <td>603</td>
                                            <td>60</td>
                                            <td>30</td>
                                            <td>633</td>
                                        </tr>
                                        <tr>
                                            <td>69</td>
                                            <td>11/22/2018</td>
                                            <td>Melissa Henry</td>
                                            <td>Edward Bailey</td>
                                            <td>621</td>
                                            <td>62</td>
                                            <td>31</td>
                                            <td>652</td>
                                        </tr>
                                        <tr>
                                            <td>70</td>
                                            <td>11/23/2018</td>
                                            <td>Stephen Barnes</td>
                                            <td>Janice Marshall</td>
                                            <td>444</td>
                                            <td>44</td>
                                            <td>22</td>
                                            <td>466</td>
                                        </tr>
                                        <tr>
                                            <td>71</td>
                                            <td>11/20/2018</td>
                                            <td>Willie Stewart</td>
                                            <td>Phyllis Wells</td>
                                            <td>809</td>
                                            <td>80</td>
                                            <td>40</td>
                                            <td>849</td>
                                        </tr>
                                        <tr>
                                            <td>72</td>
                                            <td>11/21/2018</td>
                                            <td>Christina Anderson</td>
                                            <td>Melissa Coleman</td>
                                            <td>736</td>
                                            <td>73</td>
                                            <td>36</td>
                                            <td>773</td>
                                        </tr>
                                        <tr>
                                            <td>73</td>
                                            <td>11/22/2018</td>
                                            <td>Craig Alexander</td>
                                            <td>Philip Gonzalez</td>
                                            <td>711</td>
                                            <td>71</td>
                                            <td>35</td>
                                            <td>747</td>
                                        </tr>
                                        <tr>
                                            <td>74</td>
                                            <td>11/22/2018</td>
                                            <td>David Williamson</td>
                                            <td>Carolyn Morris</td>
                                            <td>129</td>
                                            <td>12</td>
                                            <td>6</td>
                                            <td>135</td>
                                        </tr>
                                        <tr>
                                            <td>75</td>
                                            <td>11/24/2018</td>
                                            <td>Clarence Johnson</td>
                                            <td>Edward Dunn</td>
                                            <td>747</td>
                                            <td>74</td>
                                            <td>37</td>
                                            <td>784</td>
                                        </tr>
                                        <tr>
                                            <td>76</td>
                                            <td>11/25/2018</td>
                                            <td>Heather Rose</td>
                                            <td>Benjamin Castillo</td>
                                            <td>725</td>
                                            <td>72</td>
                                            <td>36</td>
                                            <td>761</td>
                                        </tr>
                                        <tr>
                                            <td>77</td>
                                            <td>11/24/2018</td>
                                            <td>Randy Murphy</td>
                                            <td>Judith Castillo</td>
                                            <td>760</td>
                                            <td>76</td>
                                            <td>38</td>
                                            <td>798</td>
                                        </tr>
                                        <tr>
                                            <td>78</td>
                                            <td>11/23/2018</td>
                                            <td>Andrea Jenkins</td>
                                            <td>Julia Coleman</td>
                                            <td>354</td>
                                            <td>35</td>
                                            <td>17</td>
                                            <td>372</td>
                                        </tr>
                                        <tr>
                                            <td>79</td>
                                            <td>11/25/2018</td>
                                            <td>Carlos Flores</td>
                                            <td>Beverly Garza</td>
                                            <td>922</td>
                                            <td>92</td>
                                            <td>46</td>
                                            <td>968</td>
                                        </tr>
                                        <tr>
                                            <td>80</td>
                                            <td>11/22/2018</td>
                                            <td>Joan Wright</td>
                                            <td>Catherine Sullivan</td>
                                            <td>639</td>
                                            <td>63</td>
                                            <td>31</td>
                                            <td>671</td>
                                        </tr>
                                        <tr>
                                            <td>81</td>
                                            <td>11/24/2018</td>
                                            <td>Brenda Ramirez</td>
                                            <td>Tina Ortiz</td>
                                            <td>982</td>
                                            <td>98</td>
                                            <td>49</td>
                                            <td>1031</td>
                                        </tr>
                                        <tr>
                                            <td>82</td>
                                            <td>11/24/2018</td>
                                            <td>Kimberly Roberts</td>
                                            <td>Larry Sims</td>
                                            <td>701</td>
                                            <td>70</td>
                                            <td>35</td>
                                            <td>736</td>
                                        </tr>
                                        <tr>
                                            <td>83</td>
                                            <td>11/20/2018</td>
                                            <td>Ralph Scott</td>
                                            <td>Julie Mccoy</td>
                                            <td>154</td>
                                            <td>15</td>
                                            <td>7</td>
                                            <td>162</td>
                                        </tr>
                                        <tr>
                                            <td>84</td>
                                            <td>11/23/2018</td>
                                            <td>Jerry Wallace</td>
                                            <td>Jose Dean</td>
                                            <td>538</td>
                                            <td>53</td>
                                            <td>26</td>
                                            <td>565</td>
                                        </tr>
                                        <tr>
                                            <td>85</td>
                                            <td>11/22/2018</td>
                                            <td>David Reed</td>
                                            <td>Roger Rice</td>
                                            <td>665</td>
                                            <td>66</td>
                                            <td>33</td>
                                            <td>698</td>
                                        </tr>
                                        <tr>
                                            <td>86</td>
                                            <td>11/20/2018</td>
                                            <td>Jerry Fernandez</td>
                                            <td>Julia Rose</td>
                                            <td>688</td>
                                            <td>68</td>
                                            <td>34</td>
                                            <td>722</td>
                                        </tr>
                                        <tr>
                                            <td>87</td>
                                            <td>11/20/2018</td>
                                            <td>Phillip Bailey</td>
                                            <td>Anne Harrison</td>
                                            <td>332</td>
                                            <td>33</td>
                                            <td>16</td>
                                            <td>349</td>
                                        </tr>
                                        <tr>
                                            <td>88</td>
                                            <td>11/22/2018</td>
                                            <td>Susan Foster</td>
                                            <td>Jessica Brown</td>
                                            <td>722</td>
                                            <td>72</td>
                                            <td>36</td>
                                            <td>758</td>
                                        </tr>
                                        <tr>
                                            <td>89</td>
                                            <td>11/26/2018</td>
                                            <td>Anne Gordon</td>
                                            <td>Betty Franklin</td>
                                            <td>520</td>
                                            <td>52</td>
                                            <td>26</td>
                                            <td>546</td>
                                        </tr>
                                        <tr>
                                            <td>90</td>
                                            <td>11/19/2018</td>
                                            <td>Joseph Ward</td>
                                            <td>Kimberly Dixon</td>
                                            <td>378</td>
                                            <td>37</td>
                                            <td>18</td>
                                            <td>397</td>
                                        </tr>
                                        <tr>
                                            <td>91</td>
                                            <td>11/19/2018</td>
                                            <td>Jacqueline Diaz</td>
                                            <td>Brian Brown</td>
                                            <td>500</td>
                                            <td>50</td>
                                            <td>25</td>
                                            <td>525</td>
                                        </tr>
                                        <tr>
                                            <td>92</td>
                                            <td>11/20/2018</td>
                                            <td>Angela Mitchell</td>
                                            <td>Teresa Miller</td>
                                            <td>942</td>
                                            <td>94</td>
                                            <td>47</td>
                                            <td>989</td>
                                        </tr>
                                        <tr>
                                            <td>93</td>
                                            <td>11/23/2018</td>
                                            <td>Victor Brooks</td>
                                            <td>Mark Welch</td>
                                            <td>289</td>
                                            <td>28</td>
                                            <td>14</td>
                                            <td>303</td>
                                        </tr>
                                        <tr>
                                            <td>94</td>
                                            <td>11/21/2018</td>
                                            <td>Kevin West</td>
                                            <td>Andrea Foster</td>
                                            <td>511</td>
                                            <td>51</td>
                                            <td>25</td>
                                            <td>537</td>
                                        </tr>
                                        <tr>
                                            <td>95</td>
                                            <td>11/20/2018</td>
                                            <td>Earl Cook</td>
                                            <td>Sean Rice</td>
                                            <td>340</td>
                                            <td>34</td>
                                            <td>17</td>
                                            <td>357</td>
                                        </tr>
                                        <tr>
                                            <td>96</td>
                                            <td>11/25/2018</td>
                                            <td>Anthony Stone</td>
                                            <td>Harold Hanson</td>
                                            <td>565</td>
                                            <td>56</td>
                                            <td>28</td>
                                            <td>593</td>
                                        </tr>

                                        <tr>
                                            <td>199</td>
                                            <td>11/26/2018</td>
                                            <td>Ryan Ford</td>
                                            <td>Marie Kim</td>
                                            <td>524</td>
                                            <td>52</td>
                                            <td>26</td>
                                            <td>550</td>
                                        </tr>
                                        <tr>
                                            <td>200</td>
                                            <td>11/23/2018</td>
                                            <td>Paul Gardner</td>
                                            <td>Philip Robertson</td>
                                            <td>341</td>
                                            <td>34</td>
                                            <td>17</td>
                                            <td>358</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- ********************************************** -->

                            </div>
                        </div>
                    </section>
                </div>
                <!-- MAIN CONTENT AREA ENDS -->
            </div>
            @include('includes.modals.add-payment-modal')
@endsection


@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <script src="{{asset('assets/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>

    
    
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection