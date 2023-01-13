<div id="content" class="at_set_form">
	<section id="widget-grid" class="">
		<div class="row">
			<div class="col-sm-12 sortable-grid ui-sortable	">
				<article class="main">
					<div class="sponsor">
						<div class="jarviswidget jarviswidget-color-darken">
							<form method="post" class="form-inline">
								<div class="form-group basic">
									<div class="input-wrapper">
										<label class="form-label">[[LABEL_SELECT_PERIOD]]</label>
										<div class="controls">
											<select name="selPeriod" id="selPeriod" class="form-control">
												<?php
												$join_period = date('Y-m', strtotime($_SESSION['myAccount']['join_date']));
												$cur_period = strtotime(date('Y-m'));
												for ($i = 0; $i < 12; $i++) {
													$the_period = date('Y-m', strtotime("-" . $i . " month", $cur_period));
													$the_period_name = date('M Y', strtotime($the_period . "-1"));
													$selected = ($report['period'] == $the_period) ? 'selected="selected"' : '';
													if ($the_period >= $join_period) {
														echo '<option value="' . $the_period . '" ' . $selected . '>' . $the_period_name . '</option>';
													}
												}
												?>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group basic">
									<div class="input-wrapper">
										<input type="submit" name="btnView" value="[[DEF_VIEW]]"
											   class="btn btn-success btn-lg btn-block"/>
									</div>
								</div>
							</form>
							<div>
								<?php
								$sponsor = $report['SPONSOR_BONUS'];
								$binary = $report['BINARY_BONUS'];
								$matching = $report['MATCHING_BONUS'];
								$total = $sponsor + $matching + $binary;
								?>
								<?php echo " <strong/> [[LABEL_PAYOUT]]" . " " . date('M Y', strtotime($report['period'])) . ": $ " . number_format($total, 2, '.', ',') . ''; ?>
							</div>

							<div class="listview-title mt-1"></div>
							<div class="card">
								<div class="table-responsive">

									<table class="table table-striped">
										<tr>
											<td>
												<div href="<?php echo base_url("reports/commission/sponsor/" . $report['period']) ?>"
												   class="item">
													<div class="in">
														[[LABEL_SPONSOR_BONUS]]
													</div>
												</div>
											</td>
											<td>
												<div href="<?php echo base_url("reports/commission/sponsor/" . $report['period']) ?>"
												   class="item">
													<div class="in">
														$ <?php echo number_format($sponsor, 2, '.', ',') ?>
													</div>
												</div>
											</td>
											<td>
												<div href="<?php echo base_url("reports/commission/sponsor/" . $report['period']) ?>"
												   class="btn btn-success btn-block btn-lg me-1">VEIW
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div href="<?php echo base_url("reports/commission/matching/" . $report['period']) ?>"
												   class="item">
													<div class="in">
														[[LABEL_MATCHING_BONUS]]
													</div>
												</div>
											</td>
											<td>
												<div href="<?php echo base_url("reports/commission/matching/" . $report['period']) ?>"
												   class="item">
													<div class="in">
														$ <?php echo number_format($matching, 2, '.', ',') ?>
													</div>
												</div>
											</td>
											<td>
												<div href="<?php echo base_url("reports/commission/matching/" . $report['period']) ?>"
												   class="btn btn-success btn-block btn-lg me-1">
													VIEW
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div href="<?php echo base_url("reports/commission/binary/" . $report['period']) ?>"
												   class="item">
													<div class="in">
														[[LABEL_BINARY_BONUS]]
													</div>
												</div>
											</td>
											<td>
												<div href="<?php echo base_url("reports/commission/binary/" . $report['period']) ?>"
												   class="item">
													<div class="in">
														$ <?php echo number_format($binary, 2, '.', ',') ?>
													</div>
												</>
											</td>
											<td>
												<div href="<?php echo base_url("reports/commission/binary/" . $report['period']) ?>"
												   class="btn btn-success btn-block btn-lg me-1">VIEW
												</div>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</article>
		</div>
	</section>
</div>
