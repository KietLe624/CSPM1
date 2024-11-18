import mysql.connector
import mysql.connector
from gtts import gTTS

# Thông tin kết nối
host = "localhost"
user = "root"
password = ""  # Để trống nếu bạn chưa đặt mật khẩu
database = "tts_db"  # Thay bằng tên cơ sở dữ liệu của bạn

try:
    # Kết nối tới MySQL
    conn = mysql.connector.connect(
        host=host,
        user=user,
        password=password,
        database=database
    )

    if conn.is_connected():
        print("Kết nối thành công với MySQL trên XAMPP!")

    # Tạo cursor để thực hiện truy vấn
    cursor = conn.cursor()



    # Truy ván dữ liệu trong bảng
    cursor.execute("SELECT file_name FROM audio WHERE id = 1;")
    # Lấy danh sách tên cột
    column_names = [desc[0] for desc in cursor.description]

    # Duyệt từng dòng trong kết quả
    for row in cursor.fetchall():
        # In ra từng giá trị của dòng
        for i, value in enumerate(row):
            print(f"{column_names[i]}: {value}")
            file_name = value

    cursor.execute("SELECT text FROM audio WHERE id = 1;")
    # Lấy danh sách tên cột
    column_names = [desc[0] for desc in cursor.description]

    # Duyệt từng dòng trong kết quả
    for row in cursor.fetchall():
        # In ra từng giá trị của dòng
        for i, value in enumerate(row):
            print(f"{column_names[i]}: {value}")
            text = value

    # Tạo file audio từ text
    tts = gTTS(text=text, lang='vi')
    # Lưu file audio
    tts.save(f'{file_name}.mp3')

except mysql.connector.Error as e:
    print(f"Lỗi kết nối MySQL: {e}")

