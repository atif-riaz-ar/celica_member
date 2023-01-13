<?php $_SESSION['asset_file_name'] = "placement"; ?>
<div id="appCapsule">
	<div class="listview-title mt-1"></div>
	<div class="col-md-12">    <!-- Sponsor Network -->
		<div class="sponsor">
			<table width="100%" border="0" cellspacing="0" cellpadding="20">
				<tr>
					<td height="500" valign="top">
						<table width="100%" border="0" cellspacing="0" cellpadding="10" bgcolor="#ffffff"
							   style="border-radius: 10px !important;">
							<tr>
								<td>
									<div id="sidetree">
										<div class="treeheader">&nbsp;</div>
										<div id="sidetreecontrol">
											<span class="STYLE5">
												<a href="?#">[[SHRINK]]</a> |
												<a href="?#">[[EXPAND]]</a>
											</span>
										</div>
										<ul class="treeview STYLE2" id="tree_<?php echo $_SESSION['logged']['sponsorid']; ?>"></ul>
									</div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
