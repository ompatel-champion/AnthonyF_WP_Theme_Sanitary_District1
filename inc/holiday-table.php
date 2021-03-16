<?php if ( is_page( array( 'holiday-collection' ) ) ) { ?>
<section class="date-table ">
	<table>
	 	<thead>
	 		<tr>
	 			<th scope="col">Holiday</th>
	 			<th scope="col">Pickup</th>
	 		</tr>
	 	</thead>
	 	<tbody>
			<?php $holidays = get_post_meta( get_the_ID(), '_holiday_schedule', true ); foreach ( $holidays as $holiday ) { ?>
			<tr>
				<td data-label="Holiday"><?php echo $holiday ['holiday_date'] ?></td>
				<td data-label="Pickup"><?php echo wpautop( $holiday['holiday_pickup'] ); ?></td>
			</tr>
			<?php } ?>
	 	</tbody>
	</table>
</section>
<?php } ?>