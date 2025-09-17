<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->include('admin/include/head.php'); ?>
    <style>
        .card-dashboard {
            border-radius: 1rem;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58,59,69,.15)!important;
            border: none;
        }
        .border-left-warning {
            border-left: .25rem solid #ff9800 !important;
        }
        .border-left-success {
            border-left: .25rem solid #4caf50 !important;
        }
        .border-left-info {
            border-left: .25rem solid #2196f3 !important;
        }
        .dashboard-icon {
            width: auto;
            height: auto;
            background: none;
            border-radius: 0;
            box-shadow: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .dashboard-icon img {
            width: 48px;
            height: 48px;
        }
        .btn-view {
            background: #FF4800;
            color: #fff;
            border: none;
            border-radius: 20px;
            font-weight: 600;
            padding: 6px 24px;
            transition: background 0.2s;
        }
        .btn-view:hover, .btn-view:focus {
            background: #d93c00;
            color: #fff;
        }
        .card-dashboard .card-body {
            padding: 1rem 1.25rem;
        }
        @media (max-width: 767px) {
            .dashboard-icon { width: 36px; height: 36px; }
        }
    </style>
</head>
<body>
<div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <?= $this->include('admin/include/sidebar.php'); ?>
    <div class="body-wrapper">
        <?= $this->include('admin/include/header.php'); ?>
        <div class="container-fluid">
            <div class="row">
                <?php
                    $icons = [
                        'pending'   => 'https://img.icons8.com/?size=100&id=QXTadxb24bUa&format=png&color=000000',
                        'completed' => 'https://img.icons8.com/?size=100&id=LUikZNTrsknk&format=png&color=000000',
                        'partial'   => 'https://img.icons8.com/?size=100&id=Wcj1AVHkpXar&format=png&color=000000',
                    ];
                    $labels = [
                        'pending'   => 'Pending Payment',
                        'completed' => 'Completed Payment',
                        'partial'   => 'Partial Payment',
                    ];
                    $borders = [
                        'pending'   => 'border-left-warning',
                        'completed' => 'border-left-success',
                        'partial'   => 'border-left-info',
                    ];
                ?>
                <?php foreach (['pending','completed','partial'] as $status): ?>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card card-dashboard <?= $borders[$status] ?> shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-3 d-flex align-items-center justify-content-center">
                                    <div class="dashboard-icon">
                                        <img src="<?= $icons[$status] ?>" alt="<?= $status ?>-icon" width="32" height="32"/>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="text-xs fw-bold text-uppercase mb-1" style="color:#222;">
                                      <b><?= $labels[$status] ?></b>  
                                    </div>
                                    <div class="h5 fw-bold mb-1" style="color:#222;">
                                        ₹ <?= number_format($summary[$status]['total'], 2) ?>
                                    </div>
                                    <div class="text-xs text-muted mb-2"><?= $summary[$status]['count'] ?> clients</div>
                                    <button class="btn btn-view btn-sm" data-bs-toggle="modal" data-bs-target="#modal-<?= $status ?>">
                                        View
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- Pending Payment Modal -->
        <div class="modal fade" id="modal-pending" tabindex="-1" aria-labelledby="modalLabel-pending" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalLabel-pending">Pending Payment Clients</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <?php if(!empty($clients['pending'])): ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle">
                        <thead>
                            <tr>
                                <th>Sr No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Total Due (₹)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach($clients['pending'] as $client): ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= esc($client->name) ?></td>
                                <td><?= esc($client->email) ?></td>
                                <td>₹ <?= number_format($client->balance,2) ?></td>
                            </tr>
                            <?php endforeach; ?>
                            <?php if ($i === 1): ?>
                            <tr><td colspan="4" class="text-center">No data found.</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <?php else: ?>
                    <div class="alert alert-info mb-0">No clients found for this status.</div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <!-- Completed Payment Modal -->
        <div class="modal fade" id="modal-completed" tabindex="-1" aria-labelledby="modalLabel-completed" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalLabel-completed">Completed Payment Clients</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <?php if(!empty($clients['completed'])): ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle">
                        <thead>
                            <tr>
                                <th>Sr No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Total Paid (₹)</th>
                                <th>Payment Month</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach($clients['completed'] as $client): ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= esc($client->name) ?></td>
                                <td><?= esc($client->email) ?></td>
                                <td>₹ <?= number_format($client->total_paid,2) ?></td>
                                <td><?= esc($client->payment_month) ?></td>
                            </tr>
                            <?php endforeach; ?>
                            <?php if ($i === 1): ?>
                            <tr><td colspan="5" class="text-center">No data found.</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <?php else: ?>
                    <div class="alert alert-info mb-0">No clients found for this status.</div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <!-- Partial Payment Modal -->
        <div class="modal fade" id="modal-partial" tabindex="-1" aria-labelledby="modalLabel-partial" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalLabel-partial">Partial Payment Clients</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <?php if(!empty($clients['partial'])): ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle">
                        <thead>
                            <tr>
                                <th>Sr No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Total Paid (₹)</th>
                                <th>Monthly Fees (₹)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach($clients['partial'] as $client): ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= esc($client->name) ?></td>
                                <td><?= esc($client->email) ?></td>
                                <td>₹ <?= number_format($client->total_paid,2) ?></td>
                                <td>₹ <?= number_format($client->monthly_fees,2) ?></td>
                            </tr>
                            <?php endforeach; ?>
                            <?php if ($i === 1): ?>
                            <tr><td colspan="5" class="text-center">No data found.</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <?php else: ?>
                    <div class="alert alert-info mb-0">No clients found for this status.</div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
    </div>
    <?= $this->include('admin/include/mobnav.php'); ?>
</div>
<?= $this->include('admin/include/footerjs.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
