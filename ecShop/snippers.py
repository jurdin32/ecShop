import os.path
import smtplib
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
from email.mime.application import MIMEApplication


def Attr(cls):
    model= cls.__name__
    return cls.__doc__.replace(model,"").replace("(","").replace(")","").replace(" ","").split(",")

def send_email(subject, message, from_email, to_email=[], attachment=[]):
    """
    :param subject: Asunto del Email
    :param message: Cuerpo del mensaje, puede estar en HTML/CSS o en texto plano
    :param from_email: Email que realiza el envio
    :param to_email: Lista de emails al q se enviaran los mensajes: ["a@a.com", "b@b.com"]
    :param attachment: Lista de archivos que se adjuntaran al mensaje: ["file1.txt", "file2.txt"]
    """
    try:
        msg = MIMEMultipart()
        msg['Subject'] = subject
        msg['From'] = from_email
        msg['To'] = ", ".join(to_email)
        msg.attach(MIMEText(message, 'html'))
        if attachment:
            for f in attachment:
                with open(f, 'rb') as a_file:
                    basename = os.path.basename(f)
                    part = MIMEApplication(a_file.read(), Name=basename)
                part['Content-Disposition'] = 'attachment; filename="%s"' % basename
                msg.attach(part)
                print("Agregando archivo",str(f))
        email = smtplib.SMTP('email-smtp.us-east-2.amazonaws.com',465)
        email.login('AKIA6D72IORIEUBLU5EA','BHXBbTYbGPQNZHbslwrL7qyzzR/BqB3jvHNJnf3H/M2m')
        email.sendmail(from_email, to_email, msg.as_string())
        print("mensaje:","El correo se envio..!!")
    except Exception as error:
        print("error:",error)

#send_email("Prueba de email","Aqui el mensaje a enviar","urdin32@gmail.com",["j-h-diog@live.com.ar",],)