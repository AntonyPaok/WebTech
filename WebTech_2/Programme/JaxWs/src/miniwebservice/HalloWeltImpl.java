package miniwebservice;

import javax.jws.WebService;

@WebService( endpointInterface="miniwebservice.HalloWelt" )
public class HalloWeltImpl implements HalloWelt
{
   public String hallo( String wer )
   {
      return "Hallo " + wer;
   }
}