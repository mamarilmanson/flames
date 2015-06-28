<html>

	<div align="center">
	<form>
		<table id="table" border="0">
			<tr>
				<td class="slots">
					&nbsp;
				</td>
					<td class="center_slots">
					<div align="center">
						<span class="result"> <?php echo $key[$main]; ?></span>
					</div>
					</td>
				<td class="slots">
					&nbsp;
				</td>
			</tr>
				<tr><td colspan="3">
				<div align="center"><input type="button" value="Enter Another?" id="buttons" onClick="window.location.replace('index.php')"/></div>
				</td></tr>
				<tr>
					<td colspan="3" style="height: 230px">
				<div align="center">
						<table width="400" height="150" border="0">
						<tr><td height="50"><div align="center" style="font-family: arial; font-size: 15px; color: black; font-weight: bold">Solution:</div></td></tr>
							<tr>
								<td height="50"><div align="center" id="result"><?php	
										// Surveying first name...
													for ($x=0; $x<$l1; $x++)
														{
															if ($s1[$x]!=" ")
																{
																	for ($y=0; $y<$l2; $y++)
																		{
																			if ($s1[$x]==$s2[$y])
																				{$s1_up[$x] = "<span class=\"let\">".$s1_up[$x]."</span>"; break;}
																		}
																}
															echo $s1_up[$x]; // Echoing names with slashes...
														}
														?></div></td>
							</tr>
							<tr>
								<td height="50"><div align="center" id="result"><?php
										// Surveying Second name;
													for ($y=0; $y<$l2; $y++)
														{
															if ($s2[$y]!=" ")
																{
																	for ($x=0; $x<$l1; $x++)
																		{
																			if ($s2[$y]==$s1[$x])
																				{$s2_up[$y] = "<span class=\"let\">".$s2_up[$y]."</span>"; break;}
																		}
																}
															echo $s2_up[$y]; // Echoing name with slashes...
														}				
														?></div></td>
					</tr>
					</table>
				</div>
					</td>
				</tr>
				<tr>
					<td class="author" colspan="3">
						<div align="center"><span style="color: gray; font-size: 10px; font-family: arial">-&nbsp;Manson A. Mamaril&nbsp;-</span></div>
					</td>
				</tr>
		</table>
		</form>
	</div>
	</body>
</html>
