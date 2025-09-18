<div class="post-head mb-4"> 
	Layanan Pelanggan
</div>  
<div class="blog card shadow detail mb-4">
	<div class="card-body">  
		<!--<div class="google-maps">-->
		<!--	<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo "$iden[maps]"; ?>"></iframe>-->
		<!--</div>-->
		<div class="google-maps">
    <iframe 
        width="100%" 
        height="350" 
        frameborder="0" 
        scrolling="no" 
        marginheight="0" 
        marginwidth="0"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31690.3747157084!2d109.13382399068432!3d-6.8549795043217525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb77ee4d44f0f%3A0xf3586bdf5fc721fa!2sToko%20Emas%20Kresno!5e0!3m2!1sen!2sid!4v1755493422956!5m2!1sen!2sid"
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

		<div class="card-text">			
			<?php echo "$rows[alamat]";?>
		</div>
			
		<form action="<?php echo base_url(); ?>hubungi/kirim" method="POST">
			<div class="form-group">
				<label for="c_name">Nama<span class="required">*</span></label>
				<input type="text" placeholder="Nickname" name='a' id="c_name" required class="form-control" />
			</div>
			<div class="form-group">
				<label for="c_email">E-mail<span class="required">*</span></label>
				<input type="text" placeholder="E-mail" name='b' id="c_email" required class="form-control" />
			</div>
			<div class="form-group">
				<label for="c_message">Message<span class="required">*</span></label>
				<textarea rows="8" name='c' placeholder="Your message.." id="c_message" required class="form-control" ></textarea>
			</div>
			<div class="form-group">
				<label for="c_message">
				<?php echo $image; ?><br></label>
				<input name='security_code' maxlength=6 type="text" class="required form-control" placeholder="Masukkkan kode di sebelah kiri..">
			</div>
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-theme" value="Send a message" onclick="return confirm('Pesan anda ini akan kami balas melalui email ?')"/>
			</div>
		</form>
		
	</div> 
</div> 