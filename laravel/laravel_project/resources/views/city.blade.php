<table border="2px">
  @foreach($mydata as $d) 
<tr>
        <td>
            {{$d->id}}
        

</td>
<td>
            {{$d->cname}}
        

</td>
</tr>
@endforeach
</table>