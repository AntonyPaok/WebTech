package miniwebservice;

import java.net.URL;
import javax.xml.namespace.QName;
import javax.xml.ws.Service;

public class TestWsClient
{
   public static void main( final String[] args ) throws Throwable
   {
      String url = ( args.length > 0 ) ? args[0] : "http://localhost:4434/miniwebservice";
      Service service = Service.create(
            new URL( url + "?wsdl" ),
            new QName( "http://miniwebservice/", "HalloWeltImplService" ) );
      HalloWelt halloWelt = service.getPort( HalloWelt.class );
      System.out.println( "\n" + halloWelt.hallo( args.length > 1 ? args[1] : "" ) );
   }
}