<?xml version ='1.0' encoding ='UTF-8' ?> 
<definitions name='SabiranjeDefinicija' 
     xmlns:soap='http://schemas.xmlsoap.org/wsdl/soap/' 
     xmlns='http://schemas.xmlsoap.org/wsdl/'> 
<message name='saberi'> 
     <part name='op1' type='string'/> 
     <part name='op2' type='string'/> 
</message> 
<message name='rezultat'> 
     <part name='rezultat' type='string'/> 
</message> 
<portType name='mojPortType'> 
     <operation name='sabiranje'> 
          <input message='saberi'/> 
          <output message='rezultat'/> 
     </operation> 
</portType> 
<binding name='mojBinding' type='mojPortType'> 
     <soap:binding style='rpc' transport='http://schemas.xmlsoap.org/soap/http' /> 
     <operation name='sabiranje'> 
          <input> 
               <soap:body encodingStyle='http://schemas.xmlsoap.org/soap/encoding/'/> 
          </input> 
          <output> 
               <soap:body encodingStyle='http://schemas.xmlsoap.org/soap/encoding/'/> 
          </output> 
     </operation> 
</binding> 
<service name='ServisSabiranje'> 
     <port name='MojPort' binding='mojBinding'> 
          <soap:address location='http://localhost/mojServis/server.php'/> 
     </port> 
</service>
</definitions>
