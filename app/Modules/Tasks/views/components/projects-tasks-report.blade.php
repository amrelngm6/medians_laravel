
    <div class="col-xxl-6 col-lg-7 col-md-12">
        <div class="card p-7">
            <div class="w-full flex gap-2">

                <div class="w-full p-7">
                    <h2 class="title ">Tasks Status</h2>
                    <p class="mb-0">List of tasks by status</p>
                </div>
                <canvas class="clean-bar-chartjs  h-70px" data-fill="true" data-limit="7" data-label="Tasks"></canvas>

            </div>

            <div class="card-body   d-flex flex gap-6 align-items-center">
                <!--begin::Chart-->
                <!-- <canvas class="clean-pie-chartjs" data-label="Tasks"  width="100"></canvas> -->
                <canvas class="clean-doughnut-chartjs2 w-200px h-200px" data-limit="4" data-label="Tasks"></canvas>
                <!--end::Chart-->

                <!--begin::Labels-->
                <div class="d-flex flex-column gap-4 content-justify-center flex-row-fluid">

                    @foreach ($statusList as $status)
                    <!--begin::Label-->
                    <div class="d-flex fw-bold align-items-center">
                        <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                        <div class="text-gray-500 flex-grow-1 me-4">{{$status->name}}</div>
                        <div class="fw-bolder text-gray-700 text-xxl-end">{{ $project->tasks()->where('status_id', $status->status_id)->count() }}</div>
                    </div>
                    <!--end::Label-->
                    @endforeach
                    
                    <!--begin::Label-->
                    <div class="d-flex fw-bold align-items-center">
                        <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                        <div class="text-gray-500 flex-grow-1 me-4">Other</div>
                        @php $list = array_column($statusList->select('status_id')->toArray(), 'status_id' ); @endphp
                        <div class="fw-bolder text-gray-700 text-xxl-end">{{ $project->tasks()->whereNotIn('status_id', $list)->count() }}</div>
                    </div>
                    <!--end::Label-->

                </div>
                <!--end::Labels-->

            </div>
            <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mt-10 p-6">

                <!--begin::Wrapper-->
                <div class="d-flex flex-stack flex-grow-1 ">
                    <!--begin::Content-->
                    <div class=" fw-semibold">

                        <div class="fs-6 text-gray-700 "> Some Tasks status are being changed based on the
                            task Due date and you change it from <a href="javascript:;" class="fw-bold me-1">
                                Settings</a> </div>
                    </div>
                    <!--end::Content-->

                </div>
                <!--end::Wrapper-->
            </div>
        </div>

    </div>
    <script>

        /* Clean Doughnut Chart */
        setTimeout(() => {
                
            if ($(".clean-doughnut-chartjs2").length) {
                var randomScalingFactor = function () {
                    return Math.round(Math.random() * 100)
                };

                const chartsList = document.querySelectorAll('.clean-doughnut-chartjs2');
                
                chartsList.forEach(ctx => {
                    
                    let chartColor = jQuery(ctx).data('color');
                    let chartLabel = jQuery(ctx).data('label');
                    let chartLimit = jQuery(ctx).data('limit');

                    new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                        labels: {!! json_encode(array_column($statusList->toArray(), 'name'), true) !!},
                        datasets: 
                            [{
                                label: chartLabel ?? "Visits",
                                // borderColor: "rgba(0,0,0,1)",
                                color: chartColor ?? "",
                                backgroundColor: chartColor ?? ["#002a52", "#51bd50","#f8285a","#171922", "#ffa600", "#ffa600"].slice(0,  chartLimit ?? 5 ),
                                data: [
                                    @foreach ($statusList as $status )
                                    {{ $project->tasks()->where('status_id', $status->status_id)->count() }},
                                    @endforeach
                                ],                               
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                x: {
                                    display: false  // Hides the x-axis
                                },
                                y: {
                                    display: false  // Hides the y-axis
                                }
                            },
                            plugins: {
                                legend: {
                                    display: false,
                                }
                            }
                        }
                    });
                })

                    
            }
        }, 1000);
    </script>