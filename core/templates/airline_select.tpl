
<form name="airline" method="get" action="<?php echo url('/reports');?>">
    <table width="70%" cellpadding="10px" border="0">
        <tr>
            <td align="right"><b><font color="black" size="3">Select Your Airline:</font></b></td>
            <td align="left" cospan="2">
				<select class="search" name="airline">
                    <option value="">---ALL---</option>
                    <?php
                        foreach ($airlines as $airline)
							{
															
							echo '<option value="'.$airline->code.'">'.$airline->name.'</option>&nbsp;';
							
							}
                    ?>
                </select>
            </td>
			
		</tr>
		<tr>
			<td align="center" colspan="4"><input type="submit" name="submit" value="Search" src="" ></td>
        </tr>
	</table>
</form>