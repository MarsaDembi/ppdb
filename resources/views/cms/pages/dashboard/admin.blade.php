
        <!-- [ Persentase Pendaftaran ] start -->
        <div class="grid grid-cols-12 gap-x-6">

            <!-- Paket A -->
            <div class="col-span-12 xl:col-span-4 md:col-span-6">
                <div class="card">
                    <div class="card-header !pb-0 !border-b-0">
                        <h5>Paket A (Setara SD)</h5>
                    </div>
                    <div class="card-body">
                        <div class="flex items-center justify-between gap-3 flex-wrap">
                            <h3 class="font-light flex items-center mb-0">
                                <i class="feather icon-users text-success-500 text-[30px] mr-1.5"></i>
                                45 Pendaftar
                            </h3>
                            <p class="mb-0 text-success-600 font-semibold">75%</p>
                        </div>
                        <div class="w-full bg-theme-bodybg rounded-lg h-1.5 mt-6 dark:bg-themedark-bodybg">
                            <div class="bg-green-500 h-full rounded-lg transition-all duration-700 ease-in-out"
                                role="progressbar" style="width: 75%"></div>
                        </div>
                        {{-- <p class="text-sm text-muted mt-2">Sebagian besar sudah melengkapi berkas pendaftaran.</p> --}}
                    </div>
                </div>
            </div>

            <!-- Paket B -->
            <div class="col-span-12 xl:col-span-4 md:col-span-6">
                <div class="card">
                    <div class="card-header !pb-0 !border-b-0">
                        <h5>Paket B (Setara SMP)</h5>
                    </div>
                    <div class="card-body">
                        <div class="flex items-center justify-between gap-3 flex-wrap">
                            <h3 class="font-light flex items-center mb-0">
                                <i class="feather icon-user-check text-warning-500 text-[30px] mr-1.5"></i>
                                30 Pendaftar
                            </h3>
                            <p class="mb-0 text-warning-600 font-semibold">50%</p>
                        </div>
                        <div class="w-full bg-theme-bodybg rounded-lg h-1.5 mt-6 dark:bg-themedark-bodybg">
                            <div class="bg-yellow-500 h-full rounded-lg transition-all duration-700 ease-in-out"
                                role="progressbar" style="width: 50%"></div>
                        </div>
                        {{-- <p class="text-sm text-muted mt-2">Sebagian peserta masih dalam proses verifikasi berkas.</p> --}}
                    </div>
                </div>
            </div>

            <!-- Paket C -->
            <div class="col-span-12 xl:col-span-4">
                <div class="card">
                    <div class="card-header !pb-0 !border-b-0">
                        <h5>Paket C (Setara SMA)</h5>
                    </div>
                    <div class="card-body">
                        <div class="flex items-center justify-between gap-3 flex-wrap">
                            <h3 class="font-light flex items-center mb-0">
                                <i class="feather icon-award text-primary-500 text-[30px] mr-1.5"></i>
                                60 Pendaftar
                            </h3>
                            <p class="mb-0 text-primary-600 font-semibold">90%</p>
                        </div>
                        <div class="w-full bg-theme-bodybg rounded-lg h-1.5 mt-6 dark:bg-themedark-bodybg">
                            <div class="bg-blue-500 h-full rounded-lg transition-all duration-700 ease-in-out"
                                role="progressbar" style="width: 90%"></div>
                        </div>
                        {{-- <p class="text-sm text-muted mt-2">Mayoritas peserta telah diterima dan siap mengikuti pembelajaran.</p> --}}
                    </div>
                </div>
            </div>  

    
        <!-- [ Persentase Pendaftaran ] end -->

    <div class="col-span-12">
        <div class="card table-card">
            <div class="card-header">
                <h5>Pendaftar Terbaru</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tbody>
                            <tr class="unread">
                                <td>
                                    <img class="rounded-full max-w-10" style="width: 40px"
                                        src="{{ asset('asset/cms/images/user/avatar-1.jpg') }}" alt="activity-user">
                                </td>
                                <td>
                                    <h6>Isabella Christensen</h6>
                                </td>
                                <td>
                                    <h6>Paket A</h6>
                                </td>
                                <td>
                                    <h6 class="text-muted">
                                        11 MAY 12:56
                                    </h6>
                                </td>
                            </tr>
                            <tr class="unread">
                                <td>
                                    <img class="rounded-full max-w-10" style="width: 40px"
                                        src="{{ asset('asset/cms/images/user/avatar-2.jpg') }}" alt="activity-user">
                                </td>
                                <td>
                                    <h6 class="mb-1">Mathilde Andersen</h6>
                                </td>
                                <td>
                                    <h6>Paket A</h6>
                                </td>
                                <td>
                                    <h6 class="text-muted">
                                        11 MAY 10:35
                                    </h6>
                                </td>
                            </tr>
                            <tr class="unread">
                                <td>
                                    <img class="rounded-full max-w-10" style="width: 40px"
                                        src="{{ asset('asset/cms/images/user/avatar-3.jpg') }}" alt="activity-user">
                                </td>
                                <td>
                                    <h6 class="mb-1">Karla Sorensen</h6>
                                </td>
                                <td>
                                    <h6>Paket C</h6>
                                </td>
                                <td>
                                    <h6 class="text-muted">
                                        9 MAY 17:38
                                    </h6>
                                </td>
                            </tr>
                            <tr class="unread">
                                <td>
                                    <img class="rounded-full max-w-10" style="width: 40px"
                                        src="{{ asset('asset/cms/images/user/avatar-4.jpg') }}" alt="activity-user">
                                </td>
                                <td>
                                    <h6 class="mb-1">Ida Jorgensen</h6>
                                </td>
                                <td>
                                    <h6>Paket B</h6>
                                </td>
                                <td>
                                    <h6 class="text-muted f-w-300">
                                        19 MAY 12:56
                                    </h6>
                                </td>
                            </tr>
                            <tr class="unread">
                                <td>
                                    <img class="rounded-full max-w-10" style="width: 40px"
                                        src="{{ asset('asset/cms/images/user/avatar-5.jpg') }}" alt="activity-user">
                                </td>
                                <td>
                                    <h6 class="mb-1">Albert Andersen</h6>
                                </td>
                                <td>
                                    <h6>Paket B</h6>
                                </td>
                                <td>
                                    <h6 class="text-muted">
                                        21 July 12:56
                                    </h6>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
