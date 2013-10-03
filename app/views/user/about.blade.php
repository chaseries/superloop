@extends('layout')
@section('content')

	<div class='coverPhoto'>
	</div>

	<div class='contentWrap'>
	<div class='sidebar'>
		<ul>
			<li>
				<a href='/profile'>Profile</a>
			</li>
			<li>
				<a href='/about'>About</a>
			</li>
			<li>
				<a href='/friends'>Friends</a>
			</li>
			<li>
				<a href='/photos'>Photos</a>
			</li>
		</ul>
	</div>

	<div class='conte3nt'>


	<table class='editableTable'>
		<tr>
			<td class='tableLabel'>
				Gender
			</td>
			<td class='tableText'>
				<span class='editableText'>
				{{ Auth::user()->gender }}
				</span>

				<div class='editForm'>
				{{ Form::model(Auth::user(), (array(
					'route' => 'user/gender',
					'autocomplete' => 'off'
				)))}}

				{{ Form::select('gender', array(
					'Male' => 'Male',
					'Female' => 'Female',
					'Nonbinary' => 'Nonbinary'
				))}}

				</div>
			</td>
			<td>
				<i class='icon-pencil edit'></i>

				{{ Form::button('<i class=\'icon-ok\'></i>', array('type' => 'submit')) }}
				{{ Form::close() }}
			</td>

		</tr>

		<tr>
			<td class='tableLabel'>
			Relationship Status
			</td>
			<td class='tableText'>

				<span class='editableText'>
				{{ Auth::user()->relationshipStatus }}
				</span>

				<div class='editForm'>
				{{ Form::model(Auth::user(), (array(
					'route' => 'user/relationship',
					'autocomplete' => 'off'
				)))}}

				{{ Form::select('relationshipStatus', array(
					'Single' => 'Single',
					'In a relationship' => 'In a relationship',
					'Married' => 'Married',
					'Divorced' => 'Divorced',
					'It\'s complicated' => 'It\'s complicated'
				))}}

				</div>
			</td>
			<td>
				<i class='icon-pencil edit'></i>
				{{ Form::button('<i class=\'icon-ok\'></i>', array('type' => 'submit')) }}
				{{ Form::close() }}
			</td>	
		</tr>
		<tr>
			<td class='tableLabel'>
				Education
			</td>
			<td class='tableText'>

				<span class='editableText'>
				{{ Auth::user()->educationInstitution . ' ' . Auth::user()->educationYear }}
				</span>

				<div class='editForm'>
				{{ Form::model(Auth::user(), (array(
					'route' => 'user/education',
					'autocomplete' => 'off'
				)))}}

				{{ Form::text('educationInstitution') }}

				{{ Form::select('educationYear', array(
				'2013' => '2013',
				'2012' => '2012',
				'2011' => '2011',
				'2010' => '2010',
				'2009' => '2009',
				'2008' => '2008',
				'2007' => '2007',
				'2006' => '2006',
				'2005' => '2005',
				'2004' => '2004',
				'2003' => '2003',
				'2002' => '2002',
				'2001' => '2001',
				'2000' => '2000',
				'1999' => '1999',
				'1998' => '1998',
				'1997' => '1997',
				'1996' => '1996',
				'1995' => '1995',
				'1994' => '1994',
				'1993' => '1993',
				'1992' => '1992',
				'1991' => '1991',
				'1990' => '1990',
				'1989' => '1989',
				'1988' => '1988',
				'1987' => '1987',
				'1986' => '1986',
				'1985' => '1985',
				'1984' => '1984',
				'1983' => '1983',
				'1982' => '1982',
				'1981' => '1981',
				'1980' => '1980',
				'1979' => '1979',
				'1978' => '1978',
				'1977' => '1977',
				'1976' => '1976',
				'1975' => '1975',
				'1974' => '1974',
				'1973' => '1973',
				'1972' => '1972',
				'1971' => '1971',
				'1970' => '1970',
				'1969' => '1969',
				'1968' => '1968',
				'1967' => '1967',
				'1966' => '1966',
				'1965' => '1965',
				'1964' => '1964',
				'1963' => '1963',
				'1962' => '1962',
				'1961' => '1961',
				'1960' => '1960',
				'1959' => '1959',
				'1958' => '1958',
				'1957' => '1957',
				'1956' => '1956',
				'1955' => '1955',
				'1954' => '1954',
				'1953' => '1953',
				'1952' => '1952',
				'1951' => '1951',
				'1950' => '1950',
				'1949' => '1949',
				'1948' => '1948',
				'1947' => '1947',
				'1946' => '1946',
				'1945' => '1945',
				'1944' => '1944',
				'1943' => '1943',
				'1942' => '1942',
				'1941' => '1941',
				'1940' => '1940',
				'1939' => '1939',
				'1938' => '1938',
				'1937' => '1937',
				'1936' => '1936',
				'1935' => '1935',
				'1934' => '1934',
				'1933' => '1933',
				'1932' => '1932',
				'1931' => '1931',
				'1930' => '1930',
				'1929' => '1929',
				'1928' => '1928',
				'1927' => '1927',
				'1926' => '1926',
				'1925' => '1925',
				'1924' => '1924',
				'1923' => '1923',
				'1922' => '1922',
				'1921' => '1921',
				'1920' => '1920'
					))}}

				{{ Form::text('educationSubject') }}

				</div>
			</td>
			<td>
				<i class='icon-pencil edit'></i>
				{{ Form::button('<i class=\'icon-ok\'></i>', array('type' => 'submit')) }}
				{{ Form::close() }}
			</td>			
		</tr>
		<tr>
			<td class='tableLabel'>
				Workplace
			</td>
			<td class='tableText'>

				<span class='editableText'>
				{{ Auth::user()->workplace }}
				</span>

				<div class='editForm'>
				{{ Form::model(Auth::user(), (array(
					'route' => 'user/workplace',
					'autocomplete' => 'off'
				)))}}

				{{ Form::text('workplace') }}
				</div>
			</td>
			<td>
				<i class='icon-pencil edit'></i>
				{{ Form::button('<i class=\'icon-ok\'></i>', array('type' => 'submit')) }}
				{{ Form::close() }}
			</td>				
		</tr>
	</table>


		{{ Form::model(Auth::user(), (array(
			'route' => 'user/aboutGeneral',
			'autocomplete' => 'off'
		)))}}

		{{ Form::textarea('aboutGeneral') }}

		{{ Form::submit('Update info') }}

		{{ Form::close() }}

		{{ Form::model(Auth::user(), (array(
			'route' => 'user/aboutQuotes',
			'autocomplete' => 'off'
		)))}}

		{{ Form::textarea('aboutQuotes') }}

		{{ Form::submit('Update quotes') }}

		{{ Form::close() }}
	</div>


	</div>

<script>
$('.edit').on('click', function()
{
	$(this).css('display', 'none');
	$(this).next().css('display', 'inline');
	$(this).parent().prev().find('span').css('display', 'none');
	$(this).parent().prev().find('div').css('display', 'inline');
});

</script>

<script type="text/javascript">
<!--
cookieName="page_scroll"
expdays=365

// An adaptation of Dorcht's cookie functions.

function setCookie(name, value, expires, path, domain, secure){
    if (!expires){expires = new Date()}
    document.cookie = name + "=" + escape(value) + 
    ((expires == null) ? "" : "; expires=" + expires.toGMTString()) +
    ((path == null) ? "" : "; path=" + path) +
    ((domain == null) ? "" : "; domain=" + domain) +
    ((secure == null) ? "" : "; secure")
}

function getCookie(name) {
    var arg = name + "="
    var alen = arg.length
    var clen = document.cookie.length
    var i = 0
    while (i < clen) {
        var j = i + alen
        if (document.cookie.substring(i, j) == arg){
            return getCookieVal(j)
        }
        i = document.cookie.indexOf(" ", i) + 1
        if (i == 0) break
    }
    return null
}

function getCookieVal(offset){
    var endstr = document.cookie.indexOf (";", offset)
    if (endstr == -1)
    endstr = document.cookie.length
    return unescape(document.cookie.substring(offset, endstr))
}

function deleteCookie(name,path,domain){
    document.cookie = name + "=" +
    ((path == null) ? "" : "; path=" + path) +
    ((domain == null) ? "" : "; domain=" + domain) +
    "; expires=Thu, 01-Jan-00 00:00:01 GMT"
}

function saveScroll(){ // added function
    var expdate = new Date ()
    expdate.setTime (expdate.getTime() + (expdays*24*60*60*1000)); // expiry date

    var x = (document.pageXOffset?document.pageXOffset:document.body.scrollLeft)
    var y = (document.pageYOffset?document.pageYOffset:document.body.scrollTop)
    Data=x + "_" + y
    setCookie(cookieName,Data,expdate)
}

function loadScroll(){ // added function
    inf=getCookie(cookieName)
    if(!inf){return}
    var ar = inf.split("_")
    if(ar.length == 2){
        window.scrollTo(parseInt(ar[0]), parseInt(ar[1]))
    }
}

// add onload="loadScroll()" onunload="saveScroll()" to the opening BODY tag

// -->
</script>

@stop