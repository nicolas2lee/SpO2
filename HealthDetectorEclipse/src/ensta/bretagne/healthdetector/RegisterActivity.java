package ensta.bretagne.healthdetector;

import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;
import android.view.Menu;
import android.view.View;
import android.widget.EditText;

public class RegisterActivity extends Activity {

	private EditText mUsername;
	private EditText mEmail;
	private EditText mPassword;
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_register);
		mUsername=(EditText) findViewById(R.id.username);
		mPassword=(EditText) findViewById(R.id.register_password);
		mEmail=(EditText) findViewById(R.id.register_email);
		findViewById(R.id.register_button).setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
            	Intent toLoginActivity = new Intent(getBaseContext(),Spo2_LoginActivity.class);
            	toLoginActivity.putExtra("username",mUsername.getText().toString());
            	toLoginActivity.putExtra("email",mEmail.getText().toString());
               	toLoginActivity.putExtra("password",mPassword.getText().toString());
            	startActivity(toLoginActivity);
                //attemptLogin();
            }
        });
	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.activity_register, menu);
		return true;
	}

}
