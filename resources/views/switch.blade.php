@switch($pekerjaan)
@case("programmer")
<p>kamu adalah programmer</p>
@break
@case("designer")
<P>kamu adalah desainer</p>
@break
@default 
<p>kamu tidak bekerja</p>
@endswitch