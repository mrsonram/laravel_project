<h1>สมมติว่านี่คือส่วน Header </h1>

<h1>   @yield('title')   </h1>
	<p>yield คือ สัญลักษณ์แทนตำแหน่งที่ใช้แสดงเนื้อที่ตามที่ระบุไว้ตาม section ต่างๆ</p>
<p>สามารถแสดงสัญลักษณ์ yield ได้ไม่จำกัดจำนวน โดยต้องระบุชื่อของ yield ให้ตรงกับชื่อของ section โดยปกติ header footer ของ Page จะระบุในหน้านี้</p>

@yield('content')

@include('theme-test/sidebar')

<h1>สมมติว่านี่คือส่วน Footer</h1>